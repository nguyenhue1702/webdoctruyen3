
<?php $__env->startSection('timkiem'); ?>
    <div class="col-9  reponsive-col9">
        <div class="row nav-bread reponsive-col9">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Tìm Kiếm</li>

                </ol>
            </nav>
        </div>
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3new">
            <h3> Có <i style="color: rgb(255, 1, 1)"><?php echo e(count($truyenhay)); ?></i> Kết Quả Với Từ Khoá : <i style="color:orangered"><?php echo e($key); ?></i></h3>
        </div>
    </div>
        <div class="row  reponsive-col9 wow fadeIn bgnew" data-wow-delay="0.8s" data-wow-duration="s">
          
            <?php $__currentLoopData = $truyenhay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6  py-3 ">
                    <div class="product-card d-flex flex-row align-items-center">
                        <div class="text-center">
                            <img src="/uploads/img_truyen/<?php echo e($item->img_product); ?>" width="200" height="240px">
                        </div>
                        <div class="noidung">
                            <div class="viewer pt-1">
                                <div><i class="bi bi-eye"></i>&nbsp;125,23</div>
                                <div><i class="bi bi-heart-fill"></i></div>
                            </div>
                            <div class="ten">
                                <h6 class="mb-1"><?php echo e($item->name_product); ?></h6>
                            </div>
                            <div class="chuong">
                                <i class="bi bi-person-fill"></i>&nbsp;&nbsp;<?php echo e($item->Author->name_author); ?>

                            </div>
                            <div class="buttons py-3 px-5 viewnow">

                                <a href="<?php echo e(route('trangtruyen',[$item->id,$item->slug_product])); ?>"><button class="btn btn-success btn-sm">View Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="col-3 col3tt">
        <?php echo $__env->make('Website/menudoc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Website/timkiem.blade.php ENDPATH**/ ?>