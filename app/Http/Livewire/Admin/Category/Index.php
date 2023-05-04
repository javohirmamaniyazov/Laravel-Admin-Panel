<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $category_id;

    public function deleteCategory($category_id)
    {
        dd($category_id);
        $this->category_id = $category_id;
    }

    public function destroyCategory($category_id)
    {
        // $this->category_id = $category_id;
        $category = Category::find($this->category_id);
        // dd($category);
        $paths = 'Uploads/Category/' . $category->image;
        if (File::exists($paths)) {
            File::delete($paths);
        }
        $category->delete();
        session()->flash('message', 'Category Deleted');
    }

    public function render()
    {
        $categories = Category::paginate(8);
        return view('livewire.admin.category.index', ['categories' => $categories]);
    }
}