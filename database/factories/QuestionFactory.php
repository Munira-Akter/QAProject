<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        $title = rtrim($this -> faker -> sentence(rand(5,10)), ".");
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'body' =>  $this -> faker -> paragraph(rand(5,10), true),
            'view' => rand(0,50),
            'answer' => rand(0,50),
            'vote' => rand(-5,50),
        ];
    }
}
