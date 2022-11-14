<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toast.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/notifdiv.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/SlideBar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Create.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/List.css') }}">


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reponadmin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div id="notifDiv"></div>
    <nav class="sidebar-edit close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a href="{{ route('ShowProFile') }}"><img src="/img/avatar.png" alt=""></a>
                </span>
                <div class="text logo-text">
                    <a href="{{ route('ShowProFile') }}">
                        <span class="name">

                        </span>
                    </a>
                    <span class="">
                        @if (Session::has('name'))
                            {{ Session::get('name') }}
                        @endif
                    </span>
                    <span class="profession">
                        @if (Session::has('roleUser'))
                            @if (Session::get('roleUser') == 2)
                                Admin
                            @else
                                Pesonnel
                            @endif
                        @endif
                    </span>
                </div>
            </div>
            <div class="nhan"><i class='bx bx-menu toggle-edit' style="color:white; font-size:11px"></i></div>

        </header>

        <div class="menu-bar">
            <div class="menu">



                <ul class="menu-links">
                    <li class="nav-link-edit">
                        <a href="{{ route('HomeAdmin') }}">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <h3>Content</h3>
                    <li class="nav-link-edit">
                        <a href="{{ route('ListArticle') }}">
                            <i class="fa-solid fa-square-pen icon"></i>
                            <span class="text nav-text">Article</span>
                        </a>
                    </li>
                    @if (Session::get('roleUser') >= 1)
                    <li class="nav-link-edit">
                        <a href="{{ route('ListBanner') }}">
                            <i class='bx bx-images icon'></i>
                            <span class="text nav-text">Banner</span>
                        </a>
                    </li>
                    @endif
                    @if (Session::get('roleUser') > 1)
                        <h3>Admin </h3>

                        <li class="nav-link-edit">
                            <a href="{{ route('listproduct') }}">
                                <i class="fa-solid fa-book icon"></i>
                                <span class="text nav-text">Quản Lý Truyện</span>
                            </a>
                        </li>
                        <li class="nav-link-edit">
                            <a href="{{ route('comic_category') }}">
                                <i class="fa-solid fa-bars-staggered icon"></i>
                                <span class="text nav-text">Danh Mục Truyện</span>
                            </a>
                        </li>
                        <li class="nav-link-edit">
                            <a href="{{ route('page_theloai') }}">
                                <i class='bx bxs-purchase-tag icon'></i>
                                <span class="text nav-text">Thể Loại</span>
                            </a>
                        </li>
                    @endif
                 
                    @if (Session::get('roleUser') >= 1)
                    <li class="nav-link-edit">
                        <a href="{{ route('session_list') }}">
                            <i class="fa-solid fa-arrow-down-1-9 icon"></i>
                            <span class="text nav-text">Session</span>
                        </a>
                    </li>
                    @endif
                    @if (Session::get('roleUser') > 1)
                        <li class="nav-link-edit">
                            <a href="{{ route('ListAuthor') }}">
                                <i class="fa-solid fa-user-pen icon"></i>
                                <span class="text nav-text">Author</span>
                            </a>
                        </li>
                        <li class="nav-link-edit">
                            <a href="{{ route('Publishing') }}">
                                <i class="fa-solid fa-house-laptop icon"></i>
                                <span class="text nav-text">Pulishing</span>
                            </a>
                        </li>
                    @endif

                    <h3>User</h3>
                    @if (Session::get('roleUser') > 1)
                        <li class="nav-link-edit">
                            <a href="{{ route('list_users') }}">
                                <i class='bx bxs-user-account icon'></i>
                                <span class="text nav-text">Quản Lý User</span>
                            </a>
                        </li> 
                        @endif
                        <li class="nav-link-edit">
                            <a href="{{ route('baiviet_user') }}">
                                <i class='bx bxs-user-account icon'></i>
                                <span class="text nav-text">Bài viết User</span>
                            </a>
                        </li>
                

                    <li class="nav-link-edit">
                        <a href="{{ route('Home') }}" target="_blank">
                            <i class='bx bx-world icon'></i>
                            <span class="text nav-text">WebSite</span>
                        </a>
                    </li>



                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="{{ route('Logout') }}">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">

                    <div class="sun-moon">
                        <i class="bi bi-sun sun"></i>
                        <i class="bi bi-moon-fill moon"></i>
                    </div>
                    <div>
                        <label class='switch'>
                            <input type='checkbox'>
                            <span class='toggle-light slider'>
                        </label>
                    </div>

                </li>

            </div>
        </div>
    </nav>
    <section class="home">
        <div class="row ps-5 py-5">
            @yield('Admin/home_admin')
            @yield('article_new')
            @yield('article_list')
            @yield('article_edit')
            @yield('profile')
            @yield('editdm')
            @yield('comic_list')
            @yield('comic_category')
            @yield('comic_new')
            @yield('author_list')
            @yield('author_create')
            @yield('author_edit')
            @yield('Publishing')
            @yield('Publishing_edit')
            @yield('Publishing_new')
            @yield('product_list')
            @yield('product_new')
            @yield('product_edit')
            @yield('banner_create')
            @yield('banner_list')
            @yield('banner_edit')
            @yield('session_list')
            @yield('session_edit')
            @yield('session_new')
            @yield('theloai_list')
            @yield('edit_tl')
            @yield('user_list')
            @yield('user_edit')
            @yield('baiviet_user')
            @yield('bv_user')
        </div>
    </section>



    <script src="{{ asset('js/tuan.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/dc8bdf0c28.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/darkmode.min.js') }}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="{{ asset('js/toogle_status.min.js') }}"></script>

    <script>
     
    </script>
    {{-- //ckeditor --}}
    <script>
        CKEDITOR.replace('noidungtruyen');
        CKEDITOR.replace('noidungtruyen1');
    </script>
    {{-- data-table --}}
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    {{-- //script toasrt thong bao --}}
    @if (Session::has('ok'))
        <script>
            toastr.options = {
                "showMethod": "slideDown",
                "hideMethod": "slideUp",
                "closeMethod": "slideUp",
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center ",
            }
            toastr.success("{{ session('ok') }}", "Thành Công");
        </script>
    @endif

    @if (Session::has('loi'))
        <script>
            toastr.options = {
                "showMethod": "slideDown",
                "hideMethod": "slideUp",
                "closeMethod": "slideUp",
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center ",
            }
            toastr.error("{{ session('loi') }}", "Erro");
        </script>
    @endif

    @if (Session::has('info'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        </script>
    @endif

    @if (Session::has('warning'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        </script>
    @endif
    {{-- ///hết toarst --}}
</body>

</html>
