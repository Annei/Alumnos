<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$5Pw21EFudSlUWYqhB.YJSu1g7gP/OodS3PZ0Ohl.tthF.FkmJo4cy',
            'remember_token' => null,
            'created_at'     => '2019-06-24 05:28:15',
            'updated_at'     => '2019-06-24 05:28:15',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
