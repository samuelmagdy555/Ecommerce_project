<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
     //
    }
    public function create (){
        return view('Admin.categories.create');
    }
    public function store(Request $request)
    {
        category::create([
            'name' => $request['name']
        ]);
//        Category::create($request->except('_token'));
        return redirect()->route('category.create')->with('success' , 'Category Added Successfully');
    }


}
