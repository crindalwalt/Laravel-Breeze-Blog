<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Shahzad Farooq',
             'email' => 'crindalwalt@mail.com',
             'bio'=> 'Full stack developer specialized in Laravel',
             'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
             'remember_token'=>Str::random(10),

         ]);
        Post::factory(10)->create();
        Category::factory()->create(
            [
                'name'=>'Sports',
                'slug'=>'sports'
            ]
        );
        Category::factory()->create(
            [
                'name'=>'Politics',
                'slug'=>'Politics',
            ]
        );
        Category::factory()->create(
            [
                'name'=>'Advanture',
                'slug'=>'Advanture'
            ]
        );
    }
}
