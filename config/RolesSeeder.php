<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $author = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => [
                'create-post' => true,
            ]
        ]);

        $UI_user = Role::create([
            'name' => 'UI_user',
            'slug' => 'looser',
            'permissions' => [
                'create-post' => true,
                'create-company' => true,
            ]
        ]);

        $editor = Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permissions' => [
              'create-post' => true,
                'update-post' => true,
                'publish-post' => true,
          ]
        ]);
        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
              'create-post' => true,
                'update-post' => true,
                'publish-post' => true,
                'create-company' => true,
          ]
        ]);

        $manager = Role::create([
            'name' => 'Manager',
            'slug' => 'manager',
            'permissions' => [
              'create-post' => true,
                'update-post' => true,
                'publish-post' => true,
                'create-company' => true,
          ]
        ]);

    }
}
