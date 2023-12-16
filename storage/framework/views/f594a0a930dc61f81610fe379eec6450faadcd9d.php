<div class=" tuannn">
    <div class="side-bar-right">
        
        <div class="khung wow fadeInRight" data-wow-delay="0.8s" data-wow-duration="1s">
            <div class="title ">
                <p><i class="bi bi-list-task"></i>&nbsp;&nbsp; Danh mục Truyện</p>
            </div>
            <div class="content bgnew py-2">
                <ul>
                    <?php $__currentLoopData = $tendms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tendm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('xemtheodanhmuc', [$tendm->id, $tendm->slugdm])); ?>">
                        <li style="display: flex;">
                            &nbsp;&nbsp;<i class="bi bi-caret-right-fill"></i>&nbsp;&nbsp;
                            <?php echo e($tendm->danhmuc); ?>

                        </li>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        
        <div class="khung mt-3 wow fadeInRight" data-wow-delay="0.8s" data-wow-duration="1s">
            <div class="title style-lottie">
                <div>Truyện Xem Nhiều</div>
            </div>
            <div class="menulist bgnew">
                <ul>


                    <?php $__currentLoopData = $truyenhay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> <a href="<?php echo e(route('trangtruyen', [$item->id, $item->slug_product])); ?>"><img src="/uploads/img_truyen/<?php echo e($item->img_product); ?>" alt="" width="30px" height="30px">&nbsp;&nbsp;&nbsp;<?php echo e($item->name_product); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        
        <div class="khung pb-2  wow fadeInRight" data-wow-delay="0.8s" data-wow-duration="1s">

            <div class="title">
                <p><i class="bi bi-tag"></i> &nbsp;&nbsp; Thể Loại</p>
            </div>
            <div class="content-theloai row py-2">

                <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="menu-theloai px-2 col-6">
                    <ul>

                        <li>
                            <a href="<?php echo e(route('xemtheotheloai', [$item->id, $item->slugtl])); ?>"><i class="bi bi-tag"></i>&nbsp;&nbsp;<?php echo e($item->theloai); ?> </a>
                        </li>


                    </ul>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
        </div>

        <?php if(Session::has('name')): ?>
        
        <?php if(Session::has('name')): ?>
        <?php if(!empty($listfavourite) && isset($listfavourite)): ?>

        <?php if(count($listfavourite) == 0): ?>
        <div>
            <div class="khung">
                <div class="title style-lottie">
                    <div>Truyện Yêu Thích</div>
                </div>
                <div> không có chuyện yêu thích</div>
            </div>
        </div>
        <?php else: ?>
        <div class="khung">
            <div class="title style-lottie">
                <div>Truyện Yêu Thích</div>
            </div>
            <div class="menulist bgnew">
                <ul>
                    <?php $__currentLoopData = $listfavourite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> <a href="<?php echo e(route('trangtruyen', [$item->Favourite_product->id, $item->Favourite_product->slug_product])); ?>"><img src="/uploads/img_truyen/<?php echo e($item->Favourite_product->img_product); ?>" alt="" width="30px" height="30px">&nbsp;&nbsp;&nbsp;<?php echo e($item->Favourite_product->name_product); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>

        <?php endif; ?>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Website/menudoc.blade.php ENDPATH**/ ?>