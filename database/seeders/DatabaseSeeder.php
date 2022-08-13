<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Book::factory(1000)->create();

        Category::create([
            'name' => "Programming"
        ]);

        Category::create([
            'name' => "Desain"
        ]);
    }
}