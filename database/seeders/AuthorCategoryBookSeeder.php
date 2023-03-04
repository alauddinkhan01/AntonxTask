<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\ModelHasBooks;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorCategoryBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //authors
        $authors[]= Author::create(['name' => 'Jane Doe']); //1
        $authors[]= Author::create(['name' => 'John Smith']);//2
        $authors[]= Author::create(['name' => 'John Kate']);//3
        $authors[]= Author::create(['name' => 'Plantop Michel']);//4
        $authors[]= Author::create(['name' => 'Chole Montegro']);//5
        $authors[]= Author::create(['name' => 'Sam Mac']);//6
        
        //books
        $books[]= Book::create(['title' => 'Become Rich', 'publish_date'=>Carbon::now()]);//1
        $books[]= Book::create(['title' => 'The Stars', 'publish_date'=>Carbon::now()]);//2
        $books[]= Book::create(['title' => 'Sun Rise', 'publish_date'=>Carbon::now()]);//3
        $books[]= Book::create(['title' => 'Darkness', 'publish_date'=>Carbon::now()]);//4
        $books[]= Book::create(['title' => 'Actors', 'publish_date'=>Carbon::now()]);//5
        $books[]= Book::create(['title' => 'Producers', 'publish_date'=>Carbon::now()]);//6
        
        // categories
        $categories[]= Category::create(['title' => 'Thriller']);//1
        $categories[]= Category::create(['title' => 'Mystery']);//2
        $categories[]= Category::create(['title' => 'Entertainment']);//3
        $categories[]= Category::create(['title' => 'Sports']);//4
        $categories[]= Category::create(['title' => 'ShowBiz']);//5
        $categories[]= Category::create(['title' => 'Seasons']);//6
        
        
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 1, 'model_type'=> 'categories', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 1, 'model_type'=> 'categories', 'model_id'=>2]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 1, 'model_type'=> 'authors', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 1, 'model_type'=> 'authors', 'model_id'=>2]);

        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 2, 'model_type'=> 'categories', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 2, 'model_type'=> 'categories', 'model_id'=>4]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 2, 'model_type'=> 'authors', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 2, 'model_type'=> 'authors', 'model_id'=>4]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 2, 'model_type'=> 'authors', 'model_id'=>1]);
        
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 3, 'model_type'=> 'categories', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 3, 'model_type'=> 'categories', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 3, 'model_type'=> 'categories', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 3, 'model_type'=> 'authors', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 3, 'model_type'=> 'authors', 'model_id'=>1]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 3, 'model_type'=> 'authors', 'model_id'=>1]);
        
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 4, 'model_type'=> 'categories', 'model_id'=>3]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 4, 'model_type'=> 'authors', 'model_id'=>2]);
        $modalhasbooks[]= ModelHasBooks::create(['book_id' => 4, 'model_type'=> 'authors', 'model_id'=>6]);

    }
}
