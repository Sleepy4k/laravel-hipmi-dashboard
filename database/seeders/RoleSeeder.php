<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Role::query()->withoutCache()->count() == 0) {
            app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

            $roles = config('permission.seeder.role');
            $permissions = config('permission.seeder.permission.admin');

            if (empty($roles)) {
                throw new \Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
            }

            foreach ($roles as $role) {
                if (config()->has('permission.seeder.permission.' . $role)) {
                    $permissions = config('permission.seeder.permission.' . $role);

                    if ($permissions == 'all') {
                        $permissions = config('permission.seeder.permission.list');
                    }
                }

                Role::create([
                    'uuid' => \Illuminate\Support\Str::uuid(),
                    'name' => $role,
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now(),
                ])->syncPermissions($permissions);
            }
        }
    }
}
