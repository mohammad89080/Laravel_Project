<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
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

//        User::truncate();
//        Category::truncate();
//        Post::truncate();

        $ahmed = User::factory()->create([
            'name' => 'Wael Dukhan',
            'username' => 'ahmedMustafa'
        ]);
        $mohammed = User::factory()->create([
            'email' => 'mohammed@gmail.com',
            'name' => 'Mohammed AlHasan',
            'username' => 'mohammed',
            'password' => bcrypt('12345678')
        ]);

        $ali = User::factory()->create([
            'name' => 'Ali ali',
            'username' => 'ali-ali'
        ]);

        $category = Category::factory()->create([
            'name'=>'technology',
            'slug'=>'technology-store',
        ]);
        $category2 = Category::factory()->create([
            'name'=>'clothes',
            'slug'=>'clothes-store',
        ]);
        $category3 = Category::factory()->create([
            'name'=>'food',
            'slug'=>'food-store',
        ]);

        Post::factory(10)->create([
            'user_id' => $ahmed->id,
            'category_id' => $category->id
        ]);
        Post::factory(10)->create([
            'user_id' => $mohammed->id,
            'category_id' => $category2->id
        ]);
        Post::factory(10)->create([
            'user_id' => $ali->id,
            'category_id' => $category3->id
        ]);
//         \App\Models\User::factory(10)->create();
//        $user = User::factory()->create();

//        $html = Category::create([
//            'name' => 'Html',
//            'slug' => 'html',
//        ]);
//        $css = Category::create([
//            'name' => 'css',
//            'slug' => 'css',
//        ]);
//        $javascript = Category::create([
//            'name' => 'javascript',
//            'slug' => 'javascript',
//        ]);

//        Post::create([
//            'title' => 'Headings and Paragraphs',
//            'slug' => 'headings-and-paragraphs',
//            'excerpt' => 'Lorem isum dolor sit amet',
//            'body' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet',
//            'user_id' => $user->id,
//            'category_id' => $html->id
//        ]);
//        Post::create([
//            'title' => 'Background Colors',
//            'slug' => 'background-colors',
//            'excerpt' => 'Lorem isum dolor sit amet',
//            'body' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet',
//            'user_id' => $user->id,
//            'category_id' => $css->id
//        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
