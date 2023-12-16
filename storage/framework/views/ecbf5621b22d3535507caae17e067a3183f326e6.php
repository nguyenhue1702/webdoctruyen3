
<?php $__env->startSection('formdanhmuc'); ?>
    <div class="col-9  reponsive-col9">
        <div class="row nav-bread reponsive-col9">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    <?php $__currentLoopData = $dm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($item->danhmuc); ?></li>

                </ol>
            </nav>
        </div>
        <div class="row  reponsive-col9  formnen">
        </div>
        <div class="row  wow fadeInLeft bgnew" data-wow-delay="0.8s" data-wow-duration="2s">
            <div class="styleh3 px-3 py-2">
                <h3><?php echo e($item->danhmuc); ?></h3>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php
                $count = count($truyen->nhieuTruyen);
                
            ?>
            <?php if($count == 0): ?>
            <div class="content-list">
                <div class="thongbao-sai mt-5">
                    Hiện tại chưa có truyện !
                </div>
                
            </div>
            <?php else: ?>
           
                <?php $__currentLoopData = $truyen->nhieuTruyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6  py-3 ">
                        <div class="product-card d-flex flex-row align-items-center">
                            <div class="text-center">
                                <img src="/uploads/img_truyen/<?php echo e($item->img_product); ?>" width="200" height="240px">
                            </div>
                            <div class="noidung">
                                <div class=" div-one px-2 py-2">
                                    <div class="style-name">
                                    <h5 class=""><?php echo e($item->name_product); ?>

                                    </h5>
                                </div>
                                <div><i class="bi bi-heart-fill"></i></div>
                            </div>
                               
                                    <div class=" style-dm size-edit">
                                        <?php $__currentLoopData = $item->thuocnhieudanhmuctruyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhmucs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="mini-dm py-1"><a href="<?php echo e(route('xemtheodanhmuc',[$danhmucs->id,$danhmucs->slugdm])); ?>"><?php echo e($danhmucs->danhmuc); ?>  </a></div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                       
                                        <div class="  style-dm size-edit">
                                            <?php $__currentLoopData = $item->thuocnhieutheloaitruyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theloais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="mini-tl py-1"><a href="<?php echo e(route('xemtheotheloai',[$theloais->id,$theloais->slugtl])); ?>" class="tag-new"><?php echo e($theloais->theloai); ?>  </a></div>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                  
                                <div class="view-now px-3">
                                    <div><i class="bi bi-eye"></i>&nbsp;<?php echo e($item->view_product); ?></div>
                                    <div><a href="<?php echo e(route('trangtruyen',[$item->id,$item->slug_product])); ?>"><button class="btn btn-success btn-sm">View Now</button></a></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <hr>
            <div>

           
            </div>
        </div>
    </div>
    <div class="col-3 col3tt">
        <?php echo $__env->make('Website/menudoc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Website/formdanhmuc.blade.php ENDPATH**/ ?>