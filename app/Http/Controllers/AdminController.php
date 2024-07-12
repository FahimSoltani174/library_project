<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        return view('admin.category');
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        $data->cat_title = $request->category;
        $data->save();
        return redirect()->back();
    }
}
