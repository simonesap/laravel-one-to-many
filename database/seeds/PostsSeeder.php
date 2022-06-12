<?php

use Illuminate\Database\Seeder;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Category;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $category_ids = Category::pluck('id')->toArray();

        for($i = 0; $i < 10; $i++){
            $post = new Post();
            $post->category_id = Arr::random($category_ids);
            $post->title = $faker->text();
            $post->content = $faker->paragraph(2);
            $post->image = $faker->imageUrl(150, 150);
            $post->slug = Str::slug( $post->title, '-');
            $post->save();
        }
    }
}
