<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MenuMetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.dashboard.title',
                'route' => null,
                'permission' => null,
                'parameters' => null,
                'active_routes' => null,
                'is_sortable' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.dashboard.home.title',
                'route' => 'dashboard.index',
                'permission' => 'dashboard.index',
                'parameters' => null,
                'active_routes' => 'dashboard.index',
                'is_sortable' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.landing.title',
                'route' => null,
                'permission' => null,
                'parameters' => null,
                'active_routes' => null,
                'is_sortable' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.landing.activity.title',
                'route' => 'activities.index',
                'permission' => 'activity.index',
                'parameters' => null,
                'active_routes' => 'activities.index, activities.show, activities.create, activities.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.landing.data.title',
                'route' => 'landing.index',
                'permission' => 'landing.data.index',
                'parameters' => null,
                'active_routes' => 'landing.data.index, landing.data.show, landing.data.create, landing.data.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.landing.type.title',
                'route' => 'landing.type.index',
                'permission' => 'landing.type.index',
                'parameters' => null,
                'active_routes' => 'landing.type.index, landing.type.show, landing.type.create, landing.type.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.account.title',
                'route' => null,
                'permission' => null,
                'parameters' => null,
                'active_routes' => null,
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.account.user.title',
                'route' => 'users.index',
                'permission' => 'account.user.index',
                'parameters' => null,
                'active_routes' => 'users.index, users.show, users.create, users.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.account.profile.title',
                'route' => 'profile.edit',
                'permission' => null,
                'parameters' => null,
                'active_routes' => 'profile.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.rbac.title',
                'route' => null,
                'permission' => null,
                'parameters' => null,
                'active_routes' => null,
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.rbac.role.title',
                'route' => 'rbac.roles.index',
                'permission' => 'rbac.role.index',
                'parameters' => null,
                'active_routes' => 'rbac.roles.index, rbac.roles.show, rbac.roles.create, rbac.roles.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.rbac.permission.title',
                'route' => 'rbac.permissions.index',
                'permission' => 'rbac.permission.index',
                'parameters' => null,
                'active_routes' => 'rbac.permissions.index, rbac.permissions.show, rbac.permissions.create, rbac.permissions.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.application.title',
                'route' => null,
                'permission' => null,
                'parameters' => null,
                'active_routes' => null,
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.application.setting.title',
                'route' => 'application.index',
                'permission' => 'application.setting.index',
                'parameters' => 'table',
                'active_routes' => 'application.index, application.show, application.create, application.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.application.type.title',
                'route' => 'application.type.index',
                'permission' => 'application.type.index',
                'parameters' => null,
                'active_routes' => 'application.type.index, application.type.show, application.type.create, application.type.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.application.translate.title',
                'route' => 'translate.index',
                'permission' => 'translate.index',
                'parameters' => 'table',
                'active_routes' => 'translate.index, translate.show, translate.create, translate.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.menu.title',
                'route' => null,
                'permission' => null,
                'parameters' => null,
                'active_routes' => null,
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.menu.menu.title',
                'route' => 'menus.index',
                'permission' => 'menu.menus.index',
                'parameters' => null,
                'active_routes' => 'menus.index, menus.show, menus.create, menus.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.menu.meta.title',
                'route' => 'menus.metas.index',
                'permission' => 'menu.metas.index',
                'parameters' => null,
                'active_routes' => 'menus.metas.index, menus.metas.show, menus.metas.create, menus.metas.edit',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.log.title',
                'route' => null,
                'permission' => null,
                'parameters' => null,
                'active_routes' => null,
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.log.auth.title',
                'route' => 'log.auth.index',
                'permission' => 'log.auth.index',
                'parameters' => null,
                'active_routes' => 'log.auth.index, log.auth.show',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.log.model.title',
                'route' => 'log.model.index',
                'permission' => 'log.model.index',
                'parameters' => null,
                'active_routes' => 'log.model.index, log.model.show',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.log.system.title',
                'route' => 'log.system.index',
                'permission' => 'log.system.index',
                'parameters' => null,
                'active_routes' => 'log.system.index, log.system.show',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'translation_key' => 'page.log.query.title',
                'route' => 'log.query.index',
                'permission' => 'log.query.index',
                'parameters' => null,
                'active_routes' => 'log.query.index, log.query.show',
                'is_sortable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
    }
}
