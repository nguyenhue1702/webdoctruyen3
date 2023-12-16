<div class="slide-nen">
    <div class="">
        <div class="image-container">
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="image image1 ">

                    <img src="/uploads/img_banner/<?php echo e($banner->img_banner); ?>" alt="img_banner">
                    <h3 class="image-tittle"><?php echo e($banner->title_banner); ?></h3>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="image image3 active ">
                <img src="/img/slide1.png" alt="sea">
                <h3 class="image-tittle">Books</h3>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Website/banner.blade.php ENDPATH**/ ?>