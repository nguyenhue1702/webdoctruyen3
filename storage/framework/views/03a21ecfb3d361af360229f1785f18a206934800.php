
<?php $__env->startSection('view_baiviet_user'); ?>
    <div class="container">
        <div class="row bredcrumb-new mt-2">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb breadcrumb-li">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                            href="<?php echo e(route('all_baiviet_user')); ?>">Truyện Ngắn</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($truyen->title); ?></li>
                </ol>
            </nav>
        </div>
        <div class="row  title-user-new mt-2">

            <h3 class="text-center title-h3">
                <?php echo e($truyen->title); ?>

            </h3>
            <br>
            <br>
            <small class="text-center tacgia-new"><i class="bi bi-person-fill"></i>
                <?php echo e($truyen->User_baiviet->name); ?></small>
            <br>
            <br>
            <small class="text-center"><?php echo e($truyen->created_at); ?></small>
        </div>
        <div class="row content-user-bàiviet mt-2 mb-2">
            <?php echo $truyen->content; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views//Website/view_baiviet_user.blade.php ENDPATH**/ ?>