<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index',['categories' =>$categories]);       
    }

    public function create (){
        return view('categories.create');
    }

    public function store(Request $request){
        $data = $request->validate ([
            'name'=> 'required',
        ]);

        $newCategory = Category::create($data);

        return redirect(route('category.index'));

    }

    public function edit(Category $category){
       return view('categories.edit', ['category' => $category]); 
    }

    public function update(Category $category, Request $request){
        $data = $request->validate ([
            'name'=> 'required',
        ]);

        $category->update($data);

        return redirect(route('category.index')) ->with('sucess', 'Category Updated Succesffully');
    }

    public function destroy (Category $category){
        $category->delete();
        return redirect(route('category.index')) ->with('sucess', 'Category Deleted Succesffully');
    }
}

