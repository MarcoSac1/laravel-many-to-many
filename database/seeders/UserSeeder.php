<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $userNames = [
            [
                'username' =>'franco',
                'email'=>'franco@franco.com',
                'password'=>'franco1234',
            ],
            [
                'username' =>'marco',
                'email'=>'marco@franco.com',
                'password'=>'marco1234',
            ],
            [
                'username' =>'elisa',
                'email'=>'elisa@franco.com',
                'password'=>'elisa1234',
            ],
            [
                'username' =>'antonio',
                'email'=>'antonio@franco.com',
                'password'=>'antonio1234',
            ],
        ];

        foreach($userNames as $userData) {
            $user = new User();
            $user ->name = $userData['username'];
            $user ->email = $userData['email'];
            $user ->password = bcrypt($userData['password']);
            $user->save();
        }
    }
}
