<?php

namespace App\Traits;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Menu\MenuResource;
use App\Http\Resources\Menu\MenuMetaResource;

trait DashboardMenu
{
    /**
     * Get the dashboard menus.
     */
    private function getDashboardMenus()
    {
        $menus = Menu::select('id', 'name', 'parent_id', 'meta_id', 'order')
            ->whereNull('parent_id')
            ->with([
                'meta:id,translation_key,route,permission,parameters,active_routes',
                'children.meta:id,translation_key,route,permission,parameters,active_routes'
            ])
            ->orderBy('order', 'asc')
            ->get()
            ->map(function ($parentMenu) {
                return [
                    'name' => $parentMenu->name,
                    'meta' => new MenuMetaResource($parentMenu->meta),
                    'child' => MenuResource::collection($parentMenu->children),
                ];
            });

        return $menus;
    }

    /**
     * Get the menus.
     */
    public function getMenus(Request $request)
    {
        if (!auth('web')->check()
            || !$request->is('dashboard*')
            || Route::getCurrentRoute()->isFallback)
        {
            return [];
        }

        return $this->getDashboardMenus();
    }
}
