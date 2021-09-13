<?php

namespace Database\Factories;

use App\Models\Clothe;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class ClotheFactory extends Factory
{

    protected $model = Clothe::class;

    #[ArrayShape(['title' => "string", 'description' => "string", 'price' => "float", 'collection_id' => "mixed"])]
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence('3'),
            'description' => $this->faker->text('200'),
            'price' => $this->faker->randomFloat(2, 2, 3000),
            'collection_id' => $this->faker->randomElement(Collection::pluck('id'))
        ];
    }
}
