<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $categories = Category::all()->pluck('id') ;
        $users = User::all()->pluck('id') ;


        for ($i=0; $i < 250 ; $i++) {
            $newPost = new Post();
            $newPost ->category_id = $faker->randomElement($categories);
            $newPost -> title =$faker ->realText(40);
            $newPost -> user_id =$faker ->randomElement($users);
            $newPost -> content =$faker ->realText(600);
            $newPost -> creation_date =$faker ->dateTimeThisMonth();
            $newPost -> image_url =$faker ->imageUrl(400,250, 'posts');
            $newPost -> save();
        }
    }
}
