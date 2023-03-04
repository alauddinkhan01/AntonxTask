<?php

namespace App\Http\Controllers\Vue\Admin;

use App\Models\User;
use Inertia\Inertia;
use App\Models\RarFile;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Company;
use App\Models\Employe;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    public $book;


    public function __construct(Book $book){
        $this->book = $book;
    }

    public function users(Request $request)
    {
        // task 2
        $employes = Employe::whereHas('job', function($q){
            $q->whereHas('department',function($q){
                $q->where('department_name',"Sale Department")
                ->whereHas('company', function($q){
                    $q->where('company_name','Acme Inc');
                });
            });
        })->with('job.department.company')->orderBy('last_name','asc')->paginate(5); 

        $companies = Company::withCount('employees')->orderBy('employees_count','DESC')->get();
        
        return Inertia::render('Users/Index', compact('employes','companies'));
    }

    public function category_author_books()
    {
        // task 1
         $books =  Book::whereHas('bookCategories', function($q) {
            $q->whereHas('category', function($q) {
                $q->where('title', 'Mystery');
            });
        })->with('bookAuthors.author')->orderBy('title', 'asc')->get();

        $authorBooks = Book::whereHas('bookAuthors', function($q){
        $q->whereHas('author', function($q){
            $q->where('name','John Smith');
        });
       })->with('bookAuthors.category')->orderBy('publish_date', 'DESC')->get();
    
        $autherCategoryBooks = Author::whereHas('authorsBooks',function($q){
            $q->whereHas('category', function($q){
                $q->where('title','Thriller');
            });
        })->withCount(['authorsBooks' => function($q) {
            $q->whereHas('category',function($q){
                $q->where('title','Thriller');
            });
        }])->with('authorsBooks.category')->get();

        $authorCategories = Category::whereHas('categoryBooks', function($q){
            $q->whereHas('author', function($q){
                $q->where('name','Jane Doe');
            });
        })->withCount(['categoryBooks' => function($q) {
            $q->whereHas('author',function($q){
                $q->where('name','Jane Doe');
            });
        }])->with('categoryBooks.author')->orderBy('title','asc')->get();

        return Inertia::render('Users/AuthorCategoryBooks',compact('books','authorBooks','autherCategoryBooks','authorCategories'));
    }
}
