<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $authors = Author::factory()->count(5)->hasBooks(3)->create();
        $categories = Category::factory(10)->create();

        $authors->each(function ($author) use ($categories) {
            $author->books->each(function ($book) use ($categories) {
                $book->categories()->attach(
                    $categories->random(rand(1, 3))->pluck('id')->toArray()
                );
            });
        });

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}