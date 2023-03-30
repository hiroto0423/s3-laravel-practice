<?php

namespace Database\Seeders;
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
        $param = [
            'name' => '管理者',
            'email' => 'admin@example.com',
            'role' => 2,
            'password' => bcrypt('password'),
        ];
        User::create($param);
    }
}
