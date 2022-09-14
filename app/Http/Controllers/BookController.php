<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
class BookController extends Controller
{
    private $category;
    public function __construct(){
        $this->category = Category::all();
    }
    public function index(){
        $category = $this->category;
        $data = Book::join('details','books.id','details.book_id')->select('title','author','books.id as id')->paginate(5);
        return view("home", compact('data','category'));
    }

    public function byCategory($id){
        $category = $this->category;
        $label = Category::find($id);
        $data = Book::join('categories','categories.id','books.category_id')->join('details','books.id','details.book_id')->where('category_id',$id)->select('title','author','books.id as id')->paginate(5);
        return view("category", compact('data','category','label'));
    }

    public function detail($id){
        $category = $this->category;
        $data = Book::join('details','books.id','details.book_id')->where('books.id',$id)->first();
        return view("detail", compact('data','category'));
    }

    public function contact(){
        $category = $this->category;
        return view("contact", compact('category'));
    }
}
