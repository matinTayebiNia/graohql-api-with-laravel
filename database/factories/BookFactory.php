<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => User::factory(),
            'image' => $this->faker->image(),
            'description' => $this->faker->paragraph(4),
            'link' => $this->faker->url(),
            'featured' => $this->faker->boolean(40),
            'category_id' => Category::factory()
        ];
    }
}
