<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/toast.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/notifdiv.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/all.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/fontawesome.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/SlideBar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/Create.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/List.css')); ?>">


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dataTables.bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/reponadmin.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        .nav-link-edit{
            position: relative;
        }
        .nav-link-edit #numberStatus{
            position: absolute;
            width: 20px;
            height: 20px;
            color: #ffffff;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background: red;
            border-radius: 50%;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div id="notifDiv"></div>
    <nav class="sidebar-edit">
        <header>
            <div class="image-text">
                <span class="image">
                    <a href="<?php echo e(route('ShowProFile')); ?>"><img src="/img/avatar.png" alt=""></a>
                </span>
                <div class="text logo-text">
                    <a href="<?php echo e(route('ShowProFile')); ?>">
                        <span class="name">

                        </span>
                    </a>
                    <span class="">
                        <?php if(Session::has('name')): ?>
                            <?php echo e(Session::get('name')); ?>

                        <?php endif; ?>
                    </span>
                    <span class="profession">
                        <?php if(Session::has('roleUser')): ?>
                            <?php if(Session::get('roleUser') == 2): ?>
                                Admin
                            <?php else: ?>
                                Tác Giả
                            <?php endif; ?>
                        <?php endif; ?>
                    </span>
                </div>
            </div>
            <div class="nhan"><i class='bx bx-menu toggle-edit' style="color:white; font-size:11px"></i></div>

        </header>

        <div class="menu-bar">
            <div class="menu">



                <ul class="menu-links">
                    <li class="nav-link-edit">
                        <a href="<?php echo e(route('HomeAdmin')); ?>">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Trang Chủ</span>
                        </a>
                    </li>
                    <?php if(Session::get('roleUser') == 2): ?>
                    <h3>Nội Dung</h3>
                    <li class="nav-link-edit">
                        <a href="<?php echo e(route('ListBanner')); ?>">
                            <i class='bx bx-images icon'></i>
                            <span class="text nav-text">Banner</span>
                        </a>
                    </li>
                    <?php endif; ?>

                        <h3>Quản Lý</h3>

                        <li class="nav-link-edit">
                            <a href="<?php echo e(route('listproduct')); ?>">
                                <i class="fa-solid fa-book icon"></i>
                                <span class="text nav-text">Quản Lý Truyện</span>
                            </a>
                        </li>
                        <?php if(Session::get('roleUser') > 1): ?>
                        <li class="nav-link-edit">
                            <a href="<?php echo e(route('comic_category')); ?>">
                                <i class="fa-solid fa-bars-staggered icon"></i>
                                <span class="text nav-text">Danh Mục Truyện</span>
                            </a>
                        </li>
                        <li class="nav-link-edit">
                            <a href="<?php echo e(route('page_theloai')); ?>">
                                <i class='bx bxs-purchase-tag icon'></i>
                                <span class="text nav-text">Thể Loại</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Session::get('roleUser') >= 1): ?>
                    <li class="nav-link-edit">
                        <a href="<?php echo e(route('session_list')); ?>">
                            <i class="fa-solid fa-arrow-down-1-9 icon"></i>
                            <span class="text nav-text">Quản Lý Chương</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(Session::get('roleUser') > 1): ?>
                        <li class="nav-link-edit">
                            <a href="<?php echo e(route('ListAuthor')); ?>">
                                <i class="fa-solid fa-user-pen icon"></i>
                                <span class="text nav-text">Quản Lý Tác Giả</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <h3>Người Dùng</h3>
                    <?php if(Session::get('roleUser') > 1): ?>
                        <li class="nav-link-edit">
                            <a href="<?php echo e(route('list_users')); ?>">
                                <i class='bx bxs-user-account icon'></i>
                                <span class="text nav-text">Quản Lý User</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-link-edit" >
                            <a href="<?php echo e(route('baiviet_user')); ?>">
                                <i class='bx bxs-user-account icon'></i>
                                <span class="text nav-text">Bài viết User </span>
                            </a>
                            <?php if(Session::get('countStatus')): ?>
                            <div id="numberStatus"> <?php echo e(Session::get('countStatus')); ?></div>
                            <?php endif; ?>
                        </li>


                    <li class="nav-link-edit">
                        <a href="<?php echo e(route('Home')); ?>" target="_blank">
                            <i class='bx bx-world icon'></i>
                            <span class="text nav-text">WebSite</span>
                        </a>
                    </li>



                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="<?php echo e(route('Logout')); ?>">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Đăng Xuất</span>
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
            <?php echo $__env->yieldContent('Admin/home_admin'); ?>
            <?php echo $__env->yieldContent('article_new'); ?>
            <?php echo $__env->yieldContent('article_list'); ?>
            <?php echo $__env->yieldContent('article_edit'); ?>
            <?php echo $__env->yieldContent('profile'); ?>
            <?php echo $__env->yieldContent('editdm'); ?>
            <?php echo $__env->yieldContent('comic_list'); ?>
            <?php echo $__env->yieldContent('comic_category'); ?>
            <?php echo $__env->yieldContent('comic_new'); ?>
            <?php echo $__env->yieldContent('author_list'); ?>
            <?php echo $__env->yieldContent('author_create'); ?>
            <?php echo $__env->yieldContent('author_edit'); ?>
            <?php echo $__env->yieldContent('Publishing'); ?>
            <?php echo $__env->yieldContent('Publishing_edit'); ?>
            <?php echo $__env->yieldContent('Publishing_new'); ?>
            <?php echo $__env->yieldContent('product_list'); ?>
            <?php echo $__env->yieldContent('product_new'); ?>
            <?php echo $__env->yieldContent('product_edit'); ?>
            <?php echo $__env->yieldContent('banner_create'); ?>
            <?php echo $__env->yieldContent('banner_list'); ?>
            <?php echo $__env->yieldContent('banner_edit'); ?>
            <?php echo $__env->yieldContent('session_list'); ?>
            <?php echo $__env->yieldContent('session_edit'); ?>
            <?php echo $__env->yieldContent('session_new'); ?>
            <?php echo $__env->yieldContent('theloai_list'); ?>
            <?php echo $__env->yieldContent('edit_tl'); ?>
            <?php echo $__env->yieldContent('user_list'); ?>
            <?php echo $__env->yieldContent('user_edit'); ?>
            <?php echo $__env->yieldContent('baiviet_user'); ?>
            <?php echo $__env->yieldContent('bv_user'); ?>
        </div>
    </section>



    <script src="<?php echo e(asset('js/tuan.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/fontawesome.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/dc8bdf0c28.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/darkmode.min.js')); ?>"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="<?php echo e(asset('js/toogle_status.min.js')); ?>"></script>

    <script>

    </script>
    
    <script>
        CKEDITOR.replace('noidungtruyen');
        CKEDITOR.replace('noidungtruyen1');
    </script>
    
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    
    <?php if(Session::has('ok')): ?>
        <script>
            toastr.options = {
                "showMethod": "slideDown",
                "hideMethod": "slideUp",
                "closeMethod": "slideUp",
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center ",
            }
            toastr.success("<?php echo e(session('ok')); ?>", "Thành Công");
        </script>
    <?php endif; ?>

    <?php if(Session::has('loi')): ?>
        <script>
            toastr.options = {
                "showMethod": "slideDown",
                "hideMethod": "slideUp",
                "closeMethod": "slideUp",
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center ",
            }
            toastr.error("<?php echo e(session('loi')); ?>", "Erro");
        </script>
    <?php endif; ?>

    <?php if(Session::has('info')): ?>
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("<?php echo e(session('info')); ?>");
        </script>
    <?php endif; ?>

    <?php if(Session::has('warning')): ?>
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("<?php echo e(session('warning')); ?>");
        </script>
    <?php endif; ?>
    
</body>

</html>
<?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/layout/admin_layout.blade.php ENDPATH**/ ?>