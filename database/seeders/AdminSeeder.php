<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $sadmin = User::create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);


        $admin = User::create([
            'first_name' => 'sub',
            'last_name' => 'admin',
            'email' => 'subadmin@gmail.com',
            'password' => bcrypt('admin123')
        ]);        
        
        $mgr = User::create([
            'first_name' => 'Ali',
            'last_name' => 'Khan',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $stkpr = User::create([
            'first_name' => 'store',
            'last_name' => 'keeper',
            'email' => 'storekeeper@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $editor = User::create([
            'first_name' => 'senior',
            'last_name' => 'editor',
            'email' => 'senioreditor@gmail.com',
            'password' => bcrypt('editor123')
        ]);

        $subeditor = User::create([
            'first_name' => 'sub',
            'last_name' => 'editor',
            'email' => 'subeditor@gmail.com',
            'password' => bcrypt('editor123')
        ]);

        $jeditor = User::create([
            'first_name' => 'junior',
            'last_name' => 'editor',
            'email' => 'juneditor@gmail.com',
            'password' => bcrypt('editor123')
        ]);
        

       $randomUsers = User::factory()->count(50)->create();
        // dd($randomUsers);

        foreach ($randomUsers as $key => $user) {
            $user->assignRole("Editor");
        }
        // factory(User::class, 50)->create()->each(function ($user) {
        //     $user->assignRole('Editor'); // assuming 'supscription' was a typo
        // });
        

        $sadmin->assignRole('Admin');
        $editor->assignRole('Editor');
        $subeditor->assignRole('Editor');
        $jeditor->assignRole('Editor');


        $sadmin->givePermissionTo('add users');
        $sadmin->givePermissionTo('update users');
        $sadmin->givePermissionTo('view users');
        $sadmin->givePermissionTo('delete users');
        
        $sadmin->givePermissionTo('create post');
        $sadmin->givePermissionTo('update post');
        $sadmin->givePermissionTo('view post');
        $sadmin->givePermissionTo('delete post');

        $admin->givePermissionTo("add users");
        $admin->givePermissionTo("update users");
        $admin->givePermissionTo("view users");


        $editor->givePermissionTo("create post");
        $editor->givePermissionTo("update post");
        $editor->givePermissionTo("view post");
        $editor->givePermissionTo("delete post");


        $subeditor->givePermissionTo("create post");
        $subeditor->givePermissionTo("update post");
        $subeditor->givePermissionTo("view post");

        $jeditor->givePermissionTo("view post");

    }
}
