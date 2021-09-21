<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Clothe;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class ProductFactory extends Factory
{

    protected $model = Product::class;

    #[ArrayShape(['title' => "string", 'description' => "string", 'price' => "float", 'collection_id' => "mixed"])]
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence('3'),
            'description' => $this->faker->text('200'),
            'price' => $this->faker->randomFloat(2, 2, 3000),
            'category_id' => $this->faker->randomElement(Category::pluck('id')),
            'brand_id'  => $this->faker->randomElement(Brand::pluck('id')),
            'collection_id' => $this->faker->randomElement(Collection::pluck('id'))
        ];
    }
}
