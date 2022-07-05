<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $indexedArray = array("/images/tiltShift1.jpeg", "/images/tiltShift2.jpeg", "/images/tiltShift3.jpeg", "/images/tiltShift4.jpeg", "/images/tiltShift5.jpeg" );
        return [
            'title' => $this->faker->title,
            'excerpt' => $this->faker->text(100),
            'body' => $this->faker->paragraph(10),
            'image_Link' => $indexedArray[array_rand($indexedArray)],
            'created_at' => now(),
        ];
    }
}
