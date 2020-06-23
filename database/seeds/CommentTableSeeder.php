<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comments = 50;
        $posts = Post::all();

        for ($i=0; $i < $comments ; $i++) { 

            $newComment = new Comment();

            $newComment->post_id = $posts->random()->id;
            $newComment->name = $faker->name();
            $newComment->comment = $faker->text(100);

            $newComment->save();
        }
    }
}
