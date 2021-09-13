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
            '/photos/FeUC_FpHLJA', '/photos/qJcpJUuY3A0', '/photos/x230a__cFO0', '/photos/9w20MZ0lsK8',
            '/photos/TT-ROxWj9nA', '/photos/FoF0w-d6Z74', '/photos/MmeCrtYlIpE', '/photos/XCU9ZV_ys5w',
            '/photos/6Md6LUpsLp4', '/photos/ZGa9d1a_4tA', '/photos/QCrLpiv-8HM', '/photos/u1V0pb5Vakg',
            '/photos/cZZMZwgv08o', '/photos/QfozoU3hUgw'
        ];

        $media = [
            '/photos/gCeCpP15V1o', '/photos/xFmXLq_KJxg', '/photos/Wr0TpKqf26s', '/photos/ZX5hQiUmDPY',
            '/photos/QarKZGj0mzk', '/photos/3oejsU5OQVk', '/photos/UP9DtTjRYpI', '/photos/m1m2EZOZVwA',
            '/photos/a-QH9MAAVNI', '/photos/J2-wAQDckus', '/photos/mWYhrOiAgmA', '/photos/LxVxPA1LOVM',
            '/photos/LV_4qM5Gf9c', '/photos/gUPiTDBdRe4', '/photos/_BDBEP0ePQc', '/photos/NA9dtyWAFV4'
        ];

        Collection::factory(8)->create();

        $collections = Collection::query()->get();
        $collections->each(function ($collection, $key) use ($collectionMedia) {
            for ($i = 0; $i < 5; $i++) {
                $collection->collectionMedia()->create([
                    'mediable_type' => 'collection',
                    'host' => 'https://unsplash.com/',
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

