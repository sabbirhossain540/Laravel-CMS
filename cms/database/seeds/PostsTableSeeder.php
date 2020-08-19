<?php
use App\Post;
use App\Category;
use App\Tag;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
        	'name' => 'News'
        ]);

        $category2 = Category::create([
        	'name' => 'Marketing'
        ]);

        $category3 = Category::create([
        	'name' => 'Partnership'
        ]);

        $post1 = Post::create([
        	'title' => 'TheSaaS is an elegant',
        	'description' => 'TheSaaS is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4',
        	'content' => 'TheSaaS is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4',
        	'category_id' => $category1->id,
        	'image' => 'img/11.jpg'
        ]);

        $post2 = Post::create([
        	'title' => 'Best practices for minimalist design',
        	'description' => 'TheSaaS is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4',
        	'content' => 'TheSaaS is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4',
        	'category_id' => $category2->id,
        	'image' => 'img/12.jpg'

        ]);

        $post3 = Post::create([
        	'title' => 'New published books to read by a product designer',
        	'description' => 'TheSaaS is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4',
        	'content' => 'TheSaaS is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4',
        	'category_id' => $category1->id,
        	'image' => 'img/10.jpg'
        ]);

        $post4 = Post::create([
        	'title' => 'Congratulate and thank to Maryam for joining our team',
        	'description' => 'TheSaaS is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4',
        	'content' => 'TheSaaS is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4',
        	'category_id' => $category3->id,
        	'image' => 'img/15.jpg'
        ]);


        $tag1 = Tag::create([
        	'name' => 'job'
        ]);

         $tag2 = Tag::create([
        	'name' => 'Social'
        ]);


          $tag3 = Tag::create([
        	'name' => 'International'
        ]);


          $tag4 = Tag::create([
        	'name' => 'National'
        ]);

          $tag5 = Tag::create([
        	'name' => 'Politics'
        ]);


          // $post1 = tags()->attach([$tag1->id, $tag4->id]);
          // $post2 = tags()->attach([$tag2->id, $tag4->id]);
          // $post3 = tags()->attach([$tag3->id, $tag5->id]);
          // $post4 = tags()->attach([$tag1->id, $tag4->id,$tag4->id,]);

    }
}
