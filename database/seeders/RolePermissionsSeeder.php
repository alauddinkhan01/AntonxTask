<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles['Admin']= Role::create(['name'=> 'Admin', 'guard_name' => 'web']);
        $roles['Editor']= Role::create(['name'=> 'Editor', 'guard_name' => 'web']);

        $admin_perms[]= Permission::create(['name' => 'add users', 'guard_name' => 'web']);
        $admin_perms[]= Permission::create(['name' => 'update users', 'guard_name' => 'web']);
        $admin_perms[]= Permission::create(['name' => 'view users', 'guard_name' => 'web']);
        $admin_perms[]= Permission::create(['name' => 'delete users', 'guard_name' => 'web']);


        $editor_parms[]= Permission::create(['name' => 'create post', 'guard_name' => 'web']);
        $editor_parms[]= Permission::create(['name' => 'update post', 'guard_name' => 'web']);
        $editor_parms[]= Permission::create(['name' => 'view post', 'guard_name' => 'web']);
        $editor_parms[]= Permission::create(['name' => 'edit post', 'guard_name' => 'web']);
        $editor_parms[]= Permission::create(['name' => 'delete post', 'guard_name' => 'web']);

        $roles['Admin']->syncPermissions($admin_perms,$editor_parms);
        $roles['Editor']->syncPermissions($editor_parms);

    }
}
