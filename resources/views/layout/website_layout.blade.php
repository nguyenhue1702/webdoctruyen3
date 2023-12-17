<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Truyện</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- link css -->
    <link rel="icon" href="/img/nguoi.png"type="image/icon type">
    <link rel="stylesheet" href="{{ asset('/css/web.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/reponweb.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slide.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/toast.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- slickslide -->
    <link rel="stylesheet" href="{{ asset('/css/slickslide.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- hết slick -->
    {{-- --wow anime-- --}}
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <div>
        <a href="javascript:" id="gototop">
            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_grdokmks.json" background="transparent"
                speed="1" style="width: 30px; height: 30px;" loop autoplay></lottie-player>
        </a>
    </div>


    <div class="nav-stick" id="navtop">
        <div class="nentren">

            <div class="container">
                <div class="darkmode">
                    <div class="sun-moon" style="color:white">
                        <i class="bi bi-sun sun"></i>
                        <i class="bi bi-moon-fill moon"></i>
                    </div>
                    <div>
                        <label class='switch'>
                            <input type='checkbox'>
                            <span class='toggle-light slider'>
                        </label>
                    </div>
                </div>

                <div class="logo">

                    <a href="{{ route('Home') }}"><img src="/img/logo.gif" alt="" srcset="" width="110px"
                            height="110px"></a>
                </div>
                <div class="acount ">
                    @if (Session::has('name'))
                        <div class="dropdown user-web" style="width: 130px">
                            <a class=" dropdown-toggle name-user" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Session::get('name') }}

                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('info') }}"><i
                                            class="bi bi-person-fill"></i> &nbsp;&nbsp; Info</a></li>
                                <li><a class="dropdown-item" href="{{ route('ds_article') }}"><i
                                            class="bi bi-pencil-fill"></i> &nbsp;&nbsp;Article</a></li>
                                <li><a class="dropdown-item" href="{{ route('Logout') }}"><i
                                            class="bi bi-box-arrow-right"></i>&nbsp;&nbsp;Logout</a></li>
                            </ul>
                        </div>
                    @else
                        <button><a href="{{ route('FormLoginAdmin') }}">Login</a></button>&nbsp;&nbsp;
                        <button><a href="{{ route('TrangDangKi') }}">Register</a></button>
                    @endif
                </div>
            </div>
        </div>
        <div class="nen">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                <li class="nav-item py-2">
                                    <a class="nav-link" href="{{ route('all_baiviet_user') }}" role="button"
                                        aria-expanded="false">
                                        Truyện Ngắn
                                    </a>
                                </li>
                                <li class="nav-item py-2">
                                    @if (Session::get('role') >= 1)
                                        <a class="nav-link" href="{{ route('user_article') }}">Đăng Truyện</a>
                                    @endif
                                </li>

                                <li class="nav-item dropdown py-2">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Danh mục
                                    </a>

                                    <ul class="dropdown-menu dropstyle" aria-labelledby="navbarDropdown">
                                        <div class="table-drop row">

                                            @foreach ($tendms as $tendm)
                                                <div class="col-3">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('xemtheodanhmuc', [$tendm->id, $tendm->slugdm]) }}"><i
                                                                style="font-size:20px"class="bi bi-tag"></i>{{ $tendm->danhmuc }}</a>
                                                    </li>
                                                </div>
                                            @endforeach

                                        </div>

                                    </ul>

                                </li>
                                <li class="nav-item py-2">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Thể Loại
                                    </a>

                                    <ul class="dropdown-menu dropstyle" aria-labelledby="navbarDropdown">
                                        <div class="table-drop row">

                                            @foreach ($theloai as $item)
                                                <div class="col-3">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('xemtheotheloai', [$item->id, $item->slugtl]) }}"><i
                                                                style="font-size:20px"class="bi bi-tag"></i>{{ $item->theloai }}</a>
                                                    </li>
                                                </div>
                                            @endforeach

                                        </div>

                                    </ul>

                                </li>
                                {{-- ---------đăng bài----------- --}}

                            </ul>
                            {{-- /           ///////tìm kiếm///////// --}}
                            <form autocomplete="off" class="d-flex" action="{{ route('timkiem') }}" method="GET">
                                @csrf
                                <div class="timkiem" data-url="{{ route('timkiem_ajax') }}">
                                    <input class="form-control me-2" type="search" id="keywords" name="key"
                                        placeholder="Search Comics" aria-label="Search " style="font-size:16px">
                                    <div id="search_ajax"></div>
                                </div>
                                <button class="btn btn-outline-success" type="submit">Search </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <section>
        {{-- ---banner --}}
        @yield('banner')
        {{-- ---endbanner --}}
    </section>
    <div class="container tttt">
        <div class="content">
            <section>
                <div class="row content-new">
                    @yield('home')
                    @yield('allbaiviet')
                    @yield('trangtruyen')
                    @yield('formdanhmuc')
                    @yield('sessionview')
                    @yield('doctruyen')
                    @yield('timkiem')
                    @yield('formtheloai')
                    @yield('user_article')
                    @yield('list_article')
                    @yield('all_baiviet_user')
                    @yield('view_baiviet_user')
                    @yield('edit_bv_user_web')
            </section>
        </div>
        <!-- footer -->
    </div>
    <footer class="footer-distributed wow fadeInUp">
        <div class="footer-left">

            <h3 class="wow  fadeInLeft">Web<span>Truyện</span></h3>
            <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                <a href="#">Blog</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
                <a href="#">Faq</a>
                <a href="#">Contact</a>
            </p>
            <p class="footer-company-name">WebTruyen© 2022</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Tuy Lai</span>Mỹ Đức, Hà Nội</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>00325389502</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">huemun1702@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About Us</span>
                Website truyện Online Update nhanh nhất với đầy đủ các truyện hot , truyện hay và mới nhất như truyện
                cười,truyện teen,vv. được cập nhật liên tục . Chúc các bạn mê đọc truyện có 1 phút giây thư giãn tuyệt
                vời .


            </p>
            <div class="footer-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-github"></i></a>
            </div>
        </div>



    </footer>

    {{-- slick slide --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
        integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/slickslide.min.js') }}"></script>
    {{-- //// --}}
    {{-- darkmode --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    {{-- wow anime --}}
    <script src="{{ asset('js/wowanimate.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://kit.fontawesome.com/dc8bdf0c28.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/slide.min.js') }}"></script>
    <script src="{{ asset('js/slickslide.min.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/slide_owl.min.js') }}"></script>
    <script src="{{ asset('js/load_more.min.js') }}"></script>
    <script src="{{ asset('js/select_option.min.js') }}"></script>
    <script src="{{ asset('js/scroll_dautrang.min.js') }}"></script>
    <script src="{{ asset('js/darkmode.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('truyenngan');
    </script>
    <script>
        $(document).ready(function() {
            $('.form-select').select2();
        });
    </script>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "111681577027257");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->

    {{-- ///script tìm kiếm bằng ajax --}}
    <script>
        $('#keywords').keyup(function() {
            var keywords = $(this).val();
            var url = $(this).parent().data('url');
            if (keywords != '') {
                // var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: url,
                    method: "POST",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        keywords: keywords,
                        _token: _token
                    },
                    success: function(data) {
                        $('#search_ajax').fadeIn();
                        $('#search_ajax').html(data);
                    }
                });
            } else {
                $('#search_ajax').fadeOut();
            }
        });
    </script>
    {{-- ---------------- --}}
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
</body>

</html>
