<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Category;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate();
        return view('livewire.admin.category.index', ['categories' => $categories]);
    }
}
