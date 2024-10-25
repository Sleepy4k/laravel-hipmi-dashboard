<?php

namespace App\Http\Resources\Landing\Home;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            $this->mergeWhen($this->data->isNotEmpty(), [
                'role' => $this->roles->first()?->name ?? null,
                'permissions' => $this->roles->flatMap(function ($role) {
                    $permissions = $role->permissions->map(function ($permission) {
                        return $permission->name;
                    });

                    if ($this->permissions) {
                        return $permissions->merge($this->permissions->pluck('name'));
                    }

                    return $permissions;
                }),
            ]),

            // Handle empty data when activity does not have any
            $this->mergeWhen($this->data->isEmpty(), [
                'role' => null,
                'permissions' => [],
            ]),
        ];
    }
}
