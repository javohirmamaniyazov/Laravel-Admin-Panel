<div class="container-fluid">
    <a href="{{ url('admin/category/create') }}">
        <button type="button" class="btn btn-primary ml-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
            📂 Add Category
        </button>
    </a>

    <div class="con ml-5">
        @foreach ($categories as $category)
            <div class="card m-3 float-left" style="width: 18rem;">
                <img src="https://avatars.mds.yandex.net/i?id=9f0e7867b63bc0dfa207178d50607e040a7e2439-9067770-images-thumbs&n=13"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="text-center">{{ $category->name }}</h3>
                    <div class="float-end">
                        <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                    
                </div>
                
            </div>
        @endforeach
    </div>

</div>
