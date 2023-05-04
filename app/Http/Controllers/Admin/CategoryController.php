<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();
    
        $category = new Category;
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];
        $category->meta_title = $validatedData['meta_title'];
        $category->meta_description = $validatedData['meta_description'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->status = $request->status == true ? "1": "0";
    
        $category->save();
    
        return redirect('admin/category')->with('message', "Categoriya muvaffaqiyatli qo'shildi");
    }
    

    public function edit(Category $category){
        return view('admin.category.edit', compact('$category'));
    }
    

}
