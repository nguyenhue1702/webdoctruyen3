<div class=" tuannn">
    <div class="side-bar-right">
     
        <div class="khung">
            <div class="title style-lottie">
               <div>Truyện Mới</div><div> <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_sxpoxpks.json"  speed="0.4" class="lottie-player"    autoplay></lottie-player></div>
            </div>
            <div class="menulist bgnew">
                <ul>
                 
                    
                    <?php $__currentLoopData = $truyennew; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> <a href="<?php echo e(route('trangtruyen', [$item->id, $item->slug_product])); ?>"><img
                                    src="/uploads/img_truyen/<?php echo e($item->img_product); ?>" alt="" width="50px"
                                    height="50px">&nbsp;&nbsp;&nbsp;<?php echo e($item->name_product); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    
        <div class="khung">
            <div class="title">
                <p><i class="bi bi-list-task"></i>&nbsp;&nbsp;Danh Mục</p>
            </div>
            <div class="content bgnew">
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
        <?php 
        $coun_yt = count($listfavourite);
        ?>
        <?php if($coun_yt == 0): ?>
        <?php else: ?>
        <div class="khung">
            <div class="title style-lottie">
               <div>Truyện Yêu Thích</div>
            </div>
            <div class="menulist bgnew">
                <ul>
                 
                    
                    <?php $__currentLoopData = $listfavourite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->Favourite_product->kichhoat == 0): ?>
                        <li> <a href="<?php echo e(route('trangtruyen', [$item->Favourite_product->id, $item->Favourite_product->slug_product])); ?>"><img
                                    src="/uploads/img_truyen/<?php echo e($item->Favourite_product->img_product); ?>" alt="" width="30px"
                                    height="30px">&nbsp;&nbsp;&nbsp;<?php echo e($item->Favourite_product->name_product); ?></a></li>
                                 
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
        
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Website/menudanhmuc.blade.php ENDPATH**/ ?>