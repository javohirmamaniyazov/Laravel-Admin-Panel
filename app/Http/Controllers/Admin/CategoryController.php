<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $valid = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . $image->getClientOriginalName();
            $image->move('Uploads/Category', $name);
        }
        Category::create([
            'name' => $valid['name'],            
            'slug' => Str::slug($valid['slug']),
            'status' => $request->status == true ? '1' : '0',            
            'image' => $name,
            'meta_title' => $valid['meta_title'],            
            'meta_keyword' => $valid['meta_keyword'],
            'meta_description' => $valid['meta_description'],            
            'description' => $valid['description'],
        ]);
        return redirect('admin/category')->with('success', 'Category added successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }


    public function update(CategoryFormRequest $request, $id)
    {
        if ($request->hasFile('image')) {
            $category = Category::findOrFail($id);
            $valid = $request->validated();
            $path = 'Uploads/Category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $image = $request->file('image');
            $name = time() . $image->getClientOriginalName();
            $image->move('Uploads/Category', $name);
            $category['name'] = $valid['name'];
            $category['slug'] = Str::slug($valid['slug']);
            $category['status'] = $request->status == true ? '1' : '0';
            $category['image'] = $name;
            $category['meta_title'] = $valid['meta_title'];
            $category['meta_keyword'] = $valid['meta_keyword'];
            $category['meta_description'] = $valid['meta_description'];
            $category['description'] = $valid['description'];
            $category->update();
            return redirect('admin/category')->with('success', 'Category updated successfully');
        } else {
            $category = Category::findOrFail($id);
            $valid = $request->validated();
            $category['name'] = $valid['name'];
            $category['slug'] = Str::slug($valid['slug']);
            $category['status'] = $request->status == true ? '1' : '0';
            $category['image'] = $category['image'];
            $category['meta_title'] = $valid['meta_title'];
            $category['meta_keyword'] = $valid['meta_keyword'];
            $category['meta_description'] = $valid['meta_description'];
            $category['description'] = $valid['description'];
            $category->update();
            return redirect('admin/category')->with('success', 'Category updated successfully');
        }
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}
