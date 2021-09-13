<?php

namespace Database\Factories;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class CollectionFactory extends Factory
{

    protected $model = Collection::class;


    #[ArrayShape(['title' => "string", 'description' => "string"])]
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence('3'),
            'description' => $this->faker->text('200'),
        ];
    }
}
