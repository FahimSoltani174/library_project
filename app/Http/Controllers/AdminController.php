<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user_type = Auth()->user()->usertype;
            if ($user_type == 'admin') {
                return view('admin.index');
            } else if ($user_type == 'user') {
                return view('home.index');
            }
        } else {
            return redirect()->back();
        }
    }

    public function category_page()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        $data->cat_title = $request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function cat_delete($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted successfully');
    }

    public function edit_category($id){
        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id){
        $data = Category::find($id);
        $data->cat_title = $request->cat_name;
        $data->save();
        return redirect('/category_page')->with('message','Category Updated successfully');
    }

    public function add_book(){
        $data = Category::all();
        return view('admin.add_book',compact('data'));
    }

    public function store_book(Request $request){
        $data = new Book;
        $data->title = $request->book_name;
        $data->auther_name = $request->auther_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category;
        $book_image = $request->book_img;
        $auther_image = $request->author_img;


        if($book_image){
            $book_image_name = time().'.'.$book_image->getClientOriginalExtension();
            $request->book_img->move('book', $book_image_name);
            $data->book_img =  $book_image_name;
        }

        if($auther_image){
            $auther_image_name = time().'.'.$auther_image->getClientOriginalExtension();
            $request->author_img->move('auther', $auther_image_name);
            $data->auther_img =  $auther_image_name;
        }

        $data->save();
        return redirect()->back();

    }

}
