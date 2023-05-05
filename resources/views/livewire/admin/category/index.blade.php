<div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form wire:submit.prevent="destroyCategory">
                    <div class="modal-body">Are you sure want to delete</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" type="button"
                            data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a href="{{ url('admin/category/create') }}">
            <button type="button" class="btn btn-primary ml-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                📂 Add Category
            </button>
        </a>

        @if (count($categories) > 0)
            <div class="con ml-5">
                @foreach ($categories as $category)
                    <a href="{{ url('admin/category/' . $category->id . '/edit') }}" style="text-decoration: none;">
                        <div class="card m-3 float-left" style="width: 17rem;">
                            <img src="{{ asset('Uploads/Category/' . $category->image) }}" class="card-img-top"
                                width="55px" height="230px" alt="{{ $category->name }}">
                            <div class="card-body">
                                <h3 class="text-center" >{{ $category->name }}</h3>
                                <div class="float-end">
                                    <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                        class="btn btn-warning">Edit</a>
                                    <a href="{{ url('admin/category/' . $category->id . '/delete') }}"
                                        onclick="return confirm('Are you sure you want to delete this Category?')"
                                        class="btn btn-danger ">Delete</a>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        @else
            <p class="display-5 text-center" style="margin-top: 15%">No categories found.</p>
        @endif

    </div>

</div>
