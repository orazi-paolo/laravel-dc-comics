<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            Comic::create([
                'title' => $comic['title'],
                'description' => $comic['description'],
                'thumb' => $comic['thumb'],
                'price' => $comic['price'],
                'series' => $comic['series'],
                'sale_date' => $comic['sale_date'],
                'type' => $comic['type']
            ]);
        }
    }
}