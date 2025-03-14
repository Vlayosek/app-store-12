<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
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
        Category::factory(10)->create();

        Product::factory(100)->create();

        User::factory()->create([
            'name' => 'Guest',
            'email' => 'guest@me.com',
            'password' => bcrypt('qweasd123'),
        ]);
    }
}
