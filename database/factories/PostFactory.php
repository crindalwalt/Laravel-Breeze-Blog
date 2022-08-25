<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // factory for generating dummy posts
        return [
            'title'=> 'This is Post title',
            'slug'=>$this->faker->slug(3),
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore dolorem eius, fuga harum iure, libero, natus nihil nulla reprehenderit sit tempora. Accusantium aspernatur autem cumque facilis, minima optio.',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin tortor purus platea sit eu id nisi litora libero. Neque vulputate consequat ac amet augue blandit maximus aliquet congue. Pharetra vestibulum posuere ornare faucibus fusce dictumst orci aenean eu facilisis ut volutpat commodo senectus purus himenaeos fames primis convallis nisi.',
            'user_id'=>1,
            'category_id'=>1,

        ];
    }
}
