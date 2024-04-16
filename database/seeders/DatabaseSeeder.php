<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Post::factory(100)->create();
        // Category::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for($i = 0; $i <50; $i++){
            DB::table('category_post')->insert([
                'post_id' => Post::factory()->create()->id,
                'category_id' => Category::factory()->create()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
