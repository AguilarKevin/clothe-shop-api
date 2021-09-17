<?php

namespace Database\Seeders;

use App\Models\Clothe;
use App\Models\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $colors =
            [
                '#79B4B7', '#95DAC1', '#911F27', '#93B5C6', '#B42B51', '#C2F784', '#FF2626', '#000000',
                '#B97A95', '#54436B', '#B8DFD8', '#232323', '#FB9300', '#0A81AB', '#F7FD04', '#81B214',
                '#9EDE73', '#9E9D89', '#424642', '#CDC733', '#7868E6', '#FFB4B4', '#EB5E0B', '#F8DC81'
            ];

        $collectionMedia = [
            '/photo-1542272604-787c3835535d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80',
            '/photo-1511676330122-8a013416a2d0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80',
            '/photo-1506634572416-48cdfe530110?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=332&q=80',
            '/photo-1514794749374-fb67509dbb7f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80',
            '/photo-1604888989902-6c8d8617e02a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80',
            '/photo-1613928317649-48a96fc628fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80'
        ];

        $media = [
            '/photo-1562157873-818bc0726f68?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=282&q=80',
            '/photo-1564859228273-274232fdb516?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80',
            '/photo-1620799140188-3b2a02fd9a77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80',
            '/photo-1618354691551-44de113f0164?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=358&q=80',
            '/photo-1611312449412-6cefac5dc3e4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=338&q=80',
            '/photo-1560769629-975ec94e6a86?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80',
            '/photo-1512374382149-233c42b6a83b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80',
            '/photo-1552346154-21d32810aba3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80',
            '/photo-1548883354-7622d03aca27?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80',
            '/photo-1473966968600-fa801b869a1a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80',
            '/photo-1616178193482-4dad15347c26?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=376&q=80',
            '/photo-1575468886310-6c584b4e3919?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80',
        ];

        Collection::factory(8)->create();

        $collections = Collection::query()->get();
        $collections->each(function ($collection, $key) use ($collectionMedia) {
            for ($i = 0; $i < 5; $i++) {
                $collection->collectionMedia()->create([
                    'mediable_type' => 'collection',
                    'host' => 'https://images.unsplash.com',
                    'path' => Arr::random($collectionMedia),
                    'mimetype' => 'image',
                ]);
            }
        });

        Clothe::factory(40)->create();

        $clothes = Clothe::query()->get();

        $clothes->each(function ($clothe, $key) use ($colors, $media) {
            $num_colors = Arr::random([1, 2, 3, 4, 5]);
            for ($i = 0; $i < $num_colors; $i++) {
                $clothe->colors()->create(['color_hex' => Arr::random($colors)]);
            }

            for ($i = 0; $i < 5; $i++) {
                $clothe->clotheMedia()->create([
                    'mediable_type' => 'clothe',
                    'host' => 'https://unsplash.com/',
                    'path' => Arr::random($media),
                    'mimetype' => 'image',
                ]);
            }

            if (Arr::random([1, 2]) == 1) {
                $clothe->discount()->create(['percentage' => Arr::random([0.10, 0.30, 0.05, 0.40, 0.50])]);
            }
        });

    }
}

