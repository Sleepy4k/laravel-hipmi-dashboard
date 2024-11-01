<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define the default application menu
        // Do not change the order
        return [
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Dashboard',
                'order' => 0,
                'parent_id' => null,
                'meta_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Home',
                'order' => 1,
                'parent_id' => 1,
                'meta_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Landing',
                'order' => 0,
                'parent_id' => null,
                'meta_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Activity',
                'order' => 2,
                'parent_id' => 3,
                'meta_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Data',
                'order' => 1,
                'parent_id' => 3,
                'meta_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Data Type',
                'order' => 2,
                'parent_id' => 3,
                'meta_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Account',
                'order' => 0,
                'parent_id' => null,
                'meta_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Users',
                'order' => 1,
                'parent_id' => 7,
                'meta_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'My Profile',
                'order' => 2,
                'parent_id' => 7,
                'meta_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'RBAC',
                'order' => 0,
                'parent_id' => null,
                'meta_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Role',
                'order' => 1,
                'parent_id' => 10,
                'meta_id' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Permission',
                'order' => 2,
                'parent_id' => 10,
                'meta_id' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Application',
                'order' => 0,
                'parent_id' => null,
                'meta_id' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Setting',
                'order' => 1,
                'parent_id' => 13,
                'meta_id' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Setting Type',
                'order' => 2,
                'parent_id' => 13,
                'meta_id' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Translate',
                'order' => 3,
                'parent_id' => 13,
                'meta_id' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Menu',
                'order' => 0,
                'parent_id' => null,
                'meta_id' => 17,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Menu',
                'order' => 1,
                'parent_id' => 17,
                'meta_id' => 18,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Menu Meta',
                'order' => 2,
                'parent_id' => 17,
                'meta_id' => 19,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Log',
                'order' => 0,
                'parent_id' => null,
                'meta_id' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Authentication',
                'order' => 1,
                'parent_id' => 20,
                'meta_id' => 21,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Model',
                'order' => 2,
                'parent_id' => 20,
                'meta_id' => 22,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'System',
                'order' => 3,
                'parent_id' => 20,
                'meta_id' => 23,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'name' => 'Query',
                'order' => 4,
                'parent_id' => 20,
                'meta_id' => 24,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
    }
}
