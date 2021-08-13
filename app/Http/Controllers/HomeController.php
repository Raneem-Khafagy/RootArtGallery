<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ArtPiece;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    ///////////REDIRECT TO LOGIN PAGE
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    ////////////////////////////////

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $artpieces = ArtPiece::inRandomOrder()->limit(8)->get();
        return view('pages/home', compact('categories', 'artpieces'));
    }
    public function about()
    {
        return view('pages/about');
    }
    public function contact()
    {
        return view('pages/contact');
    }
    public function favourites()
    {
        return view('pages/favitems');
    }

    //PASSING "category"  from the MODEL "Category"
    public function category(Category $category)
    {
        //PASSING "art_pieces" data related to the MODEL "Category"
        $data = $category->art_pieces()->paginate();
        return view('pages/category-items', compact('category', 'data'));
    }
}
