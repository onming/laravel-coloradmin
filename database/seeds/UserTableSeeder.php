<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Administrator',
            'email' => 'admin@onming.cn',
            'password' => 'admin',
        ]);

        Admin::create([
            'name' => 'Editor',
            'email' => 'editor@onming.cn',
            'password' => 'editor',
        ]);

        User::create([
            'name' => 'UserName',
            'email' => 'username@onming.cn',
            'password' => 'username',
        ]);
    }
}
