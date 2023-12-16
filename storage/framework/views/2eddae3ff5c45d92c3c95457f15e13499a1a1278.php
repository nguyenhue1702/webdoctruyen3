
<?php $__env->startSection('banner'); ?>
    <?php echo $__env->make('Website/banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
    <div class="col-9 reponsive-col9">
        <div class="main-content ">
            
            <div class="title_spnew ">
                <h3>&nbsp;Truyện Mới</h3>
            </div>
            <div class="owl-carousel owl-theme" data-wow-delay="0.8s" data-wow-duration="2s">
                <?php $__currentLoopData = $truyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <a href="<?php echo e(route('trangtruyen', [$item->id, $item->slug_product])); ?>">
                        <div class="item">
                            <img src="/uploads/img_truyen/<?php echo e($item->img_product); ?>" alt="">
                            <div class="owl-nd">
                                <div class="content-product py-2">
                                    <div><i class="bi bi-eye"></i>&nbsp;<?php echo e($item->view_product); ?></div>
                                    <div class="time-create"><?php echo e($item->created_at); ?></div>
                                </div>
                               
                             
                                <p><?php echo e($item->name_product); ?></p>

                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="title_spnew fadeInLeft wow " data-wow-duration="2s">
                <h3>&nbsp;Truyện HOT</h3>
            </div>
            <div class="row  wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="2s">
                <div class="owl-carousel owl-theme wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="2s">
                    <?php $__currentLoopData = $truyenhot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('trangtruyen', [$item->id, $item->slug_product])); ?>">
                            <div class="item">
                                <img src="/uploads/img_truyen/<?php echo e($item->img_product); ?>" alt="">
                                <div class="owl-nd">
                                    <div class="content-product py-2">
                                    <div><i class="bi bi-eye"></i>&nbsp;<?php echo e($item->view_product); ?></div>
                                    <div class="time-create"><?php echo e($item->created_at); ?></div>
                                </div>
                                <p><?php echo e($item->name_product); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
           
           <div class="title_spnew wow fadeInLeft " data-wow-duration="2s">
            <h3>&nbsp;Truyện Hay Nên Đọc</h3>
        </div>
        <div class="owl-carousel owl-theme wow fadeInLeft mb-3" data-wow-delay="0.8s" data-wow-duration="2s">
          
            <?php $__currentLoopData = $truyenhay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
                <a href="<?php echo e(route('trangtruyen',[$item->id,$item->slug_product])); ?>">
                <div class="item">
                    <img src="/uploads/img_truyen/<?php echo e($item->img_product); ?>" alt="">
                    <div class="owl-nd">
                        <div class="content-product px-2">
                        <div><i class="bi bi-eye"></i>&nbsp;<?php echo e($item->view_product); ?></div>
                            <div class="time-create"><?php echo e($item->created_at); ?></div>
                        </div>
                        <p><?php echo e($item->name_product); ?></p>
                    </div>
                </div>
                </a>
             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </div>
            
            <div class="title_spnew wow fadeInLeft " data-wow-duration="2s">
                <h3>&nbsp;Chương Mới Ra</h3>
            </div>
            <div class="owl-carousel owl-theme wow fadeInLeft mb-3" data-wow-delay="0.8s" data-wow-duration="2s">
              
                <?php $__currentLoopData = $session_new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->Product->kichhoat == 0): ?>
                    <a href="<?php echo e(route('session_view',[$item->id,$item->slug_session])); ?>">
                    <div class="item">
                        <img src="/uploads/img_truyen/<?php echo e($item->Product->img_product); ?>" alt="">
                        <div class="owl-nd">
                            <div class="content-product px-2">
                            <div><i class="bi bi-eye"></i>&nbsp;<?php echo e($item->view_session); ?></div>
                                <div class="time-create"><?php echo e($item->created_at); ?></div>
                            </div>
                            <p>Tập <?php echo e($item->session); ?>: <?php echo e($item->title_session); ?></p>

                        </div>
                    </div>
                    </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
            
            

        </div>
    </div>
    <div class="col-3">
        <?php echo $__env->make('Website.menudoc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Website/home.blade.php ENDPATH**/ ?>