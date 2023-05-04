<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-success accordion" style="background-color: #1cc88a!important"
            id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center m-1 justify-content-center"
                href="{{ url('/admin/dashboard') }}">
                <div class="sidebar-brand-icon">
                    <h3>👨‍💻</h3>
                </div>
                <div class="sidebar-brand-text" style="color: black; font-weight: 600; margin-left:10px">Admin
                    <sup>1</sup>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item text-dark">
                <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                    <i style="color: black;" class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: black;">Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/category') }}">
                    <i style="color: black;" class="fas fa-fw fa-cog"></i>
                    <span style="color: black;">Categoriya</span></a>
            </li>
            <!-- Divider -->

            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="Royxat.html">
                    <i style="color: black;" class="fas fa-fw fa-users"></i>
                    <span style="color: black;">Admins</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i style="color: black;" class="fas fa-fw fa-chart-area"></i>
                    <span style="color: black;">Statistika</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="zakaz.html">
                    <i style="color: black;" class="fas fa-fw fa-table"></i>
                    <span style="color: black;">Buyurtmalar</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="background-color: #1cc88a" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" style="background-color: #1cc88a" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ozodbek</span>
                                <img class="img-profile rounded-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAAB5CAMAAADCiAkVAAAAY1BMVEX///9APz9EQ0MxMDA3NjY7Ojo0MzP6+vq6urosKyskIyOdnZ0oJychICDv7+9oaGjLy8vi4uLV1dWUlJRhYWGJiYlTUlJbWlqurq5OTU1vbm7AwMB4d3cdGxukpKSCgoIXFRW8QGGdAAADl0lEQVRoge2ai5aiMAyGKW2hRahcBeTivP9TLujsDjpIG23onD3zv4CfaRKSv/W8X72s0FNZKpouzTMVugBQh+7SxlHs91UxitwBhKCBZGQW5yyQ0RCURZPtSTB+kEdxRiNZpXsR5Mk3gpsCehK7EIQX9gRhCoasc/Tfb/r6KcAVIm5wCRopOd9EICS6IAKoY6z5+atoj4eQt7oI3CQLNITj8zy8V4JVnWlkSECIj9Que7NjmEUrFILQKBc/xVDadXg0jwIJcMJQAhAIUQgE4QAhoBhN8unXaVXcR0AQEoJAEoSEHCkIAeMkigCEwBBqooIh8NI+AjAKhNlv0gcgwmAfoYGlI/mwj9DBihIDAdaaUBBgDZqQGGFm8GEILQICYGSZxI/2CbwRVJUY3dHLIWMTztfaA1VlhDK6bSyTK0IwHdJTCyHw/bNthrAGxWDSYHuhUcC2gLBTKVBXmMRb20O0AmXCJGZ9uQVtMrMS+37LATgvRPaLUpkv1rMwZkevAlUlw/B7UlCDDg4ICLCZRaI4LSdITSQYBF4DOAmGY7tlgChQJMfrYtwaeI1DMDVpaRYIHycZZ2XCpE3zMsM0w01mWJSW8KXUIB1oh4oQmiAgX1XpkwFliVlKv2BL9NshbZv2MVzPOwnNUkXxbiP+KtSEge9wYbnt+KCMKo9KN08CPxm1CNEeV7bbCBje809E2LbkdzmIbUuejjsgaJwOecbujtlZ16CZj5sODdPvVBznivBThZELbN9aWBAYrrasxppaKuNdhvkYtRmmJ4D9yoNSWM4I1dQxzGbhkvSdvfPIKma4xNxTRH5hJRShKAeo5/hPwVCLd0ORV5S+EIBFKCit3liusqZmwIu51VCwWrzUKVTX81cyYE08bitwVnQXDiwBjYLkCFj0lOgHW/9/IR5TswIJ0/ObCbihgJbaXqGak3y5Ak3E5emwGQph6qO8A0Fp/xQiOyboAFexZ9uGsFsCm4pWL/BG4L34e1ozxDqY0/6uVp78ZBYaMUjy27Tfo5bimvjDZyPfNRGuegwD8L2ODfGHGdfwTalVybsxIndA8OBKAR+w2RFvHafCrOWnonZxEEQuZxgX5zAlw8KyV6A3Ita0NAgzN1FY3qE56I2z+PkLweSiAwNhcW3QuUcQ7hGgbxkxENw0xyUC7PmaPYTzL8J9a4K+7v2PEC7uESrnCEHxi/AjEJZTkyuE8WchcN+FgpvP8QdK9z1yRhl2GgAAAABJRU5ErkJggg==">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Category
                                <a href="{{ url('admin/category') }}"
                                    class="btn btn-primary btn-md text-white float-end">BACK</a>
                            </h3>

                            {{-- <div class="con ml-5">
                        <a href="./product.html">
                            <div class="card m-3 float-left" style="width: 18rem;">
                                <img src="https://avatars.mds.yandex.net/i?id=9f0e7867b63bc0dfa207178d50607e040a7e2439-9067770-images-thumbs&n=13"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="text-center">Category</h3>
                                </div>
                            </div>
                        </a>
                        <a href="./product.html">
                            <div class="card m-3 float-left" style="width: 18rem;">
                                <img src="https://avatars.mds.yandex.net/i?id=9f0e7867b63bc0dfa207178d50607e040a7e2439-9067770-images-thumbs&n=13"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="text-center">Category</h3>
                                </div>
                            </div>
                        </a>
                    </div> --}}

                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/category/'.$category->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class=" col-md-6 mb-3">
                                        <label for="Name">Name</label>
                                        <input type="text" name="name" value="{{ $category->name }}" id="name" class="form-control">
                                        @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-6 mb-3">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" value="{{ $category->slug }}" id="slug" class="form-control">
                                         @error('slug') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="description">Description</label>
                                        <textarea type="text" name="description" rows="3" id="description" class="form-control">{{ $category->description }}</textarea>
                                        @error('description') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-6 mb-3">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <img class="img-responsive mt-2" style="width:300px; height:200px;" alt="image" src="/Uploads/Category/{{$category->image}}">
                                         @error('image') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-6 mb-3">
                                        <label for="status">Status</label><br />
                                        <input type="checkbox" name="status" id="status">
                                        @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="col-md-12 mb-5 mt-5">
                                        <h3>SEO Tags</h3>
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="meta_title">Meta_title</label>
                                        <input type="text" value="{{ $category->meta_title }}" name="meta_title" id="meta_title" class="form-control">
                                        @error('meta_title') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="meta_keyword">Meta_Keyword</label>
                                        <textarea type="text" name="meta_keyword" id="meta_keyword" rows="3" class="form-control">{{ $category->name }}</textarea>
                                        @error('meta_keyword') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class=" col-md-12 mb-3">
                                        <label for="meta_description">Meta_description</label>
                                        <textarea type="text" name="meta_description" id="meta_description" rows="3" class="form-control">{{ $category->name }}</textarea>
                                        @error('meta_description') <small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-primary text-white float-end">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
               
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Add Category</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="form-group">
                                <label for="product-name">Category Name</label>
                                <input type="text" class="form-control" id="product-name" name="product-name"
                                    placeholder="Enter product name" required>
                            </div>
                            <div class="form-group">
                                <label for="product-image">Category Image</label>
                                <input type="file" class="form-control-file" id="product-image"
                                    name="product-image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
