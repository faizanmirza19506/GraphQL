<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Mr chips',
            'author' => 'Jhon Doe',
            'description' => 'You will generally want to call all your seeders inside the DatabaseSeeder class.',
            'link' => 'https://riptutorial.com/laravel/example/17358/creating-a-seeder',
            'featured' => true,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'Harry Potter',
            'author' => 'Doe',
            'description' => 'You will generally want to call all your seeders inside the DatabaseSeeder class.',
            'link' => 'https://riptutorial.com/laravel/example/17358/creating-a-seeder',
            'featured' => false,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => 'Spiderman',
            'author' => 'Watson',
            'description' => 'You will generally want to call all your seeders inside the DatabaseSeeder class.',
            'link' => 'https://riptutorial.com/laravel/example/17358/creating-a-seeder',
            'featured' => true,
            'category_id' => 3,
        ]);
    }
}
