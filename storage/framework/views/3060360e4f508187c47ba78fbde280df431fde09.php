<?php $__env->startSection('trangtruyen'); ?>



    
    <div class="col-9  reponsive-col9 " id="story-detail">
        
        <div class="row nav-bread reponsive-col9">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($truyen->name_product); ?></li>
                </ol>
            </nav>
        </div>
        
        <div class="row reponsive-col9 formnen">
            <div class="col-3 img_trangtruyen">
                <div class="book">
                    <img src="/uploads/img_truyen/<?php echo e($truyen->img_product); ?>" alt="">
                </div>
                <div>
                    <ul>
                        <li><i class="bi bi-person-fill"></i><a
                                href="">&nbsp;&nbsp;<?php echo e($truyen->Author->name_author); ?></a>
                        </li>
                        <div class="style-dm">
                            <div><i class="bi bi-folder2-open"></i> </div>
                            <?php $__currentLoopData = $truyen->thuocnhieudanhmuctruyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhmucs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mini-dm"><a
                                        href="<?php echo e(route('xemtheodanhmuc', [$danhmucs->id, $danhmucs->slugdm])); ?>"><?php echo e($danhmucs->danhmuc); ?>

                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="style-dm">
                            <div><i class="bi bi-tag"></i> </div>
                            <?php $__currentLoopData = $truyen->thuocnhieutheloaitruyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theloais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mini-tl"><a
                                        href="<?php echo e(route('xemtheotheloai', [$theloais->id, $theloais->slugtl])); ?>"
                                        class="tag"><?php echo e($theloais->theloai); ?>

                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <li><i class="bi bi-list-ol"></i><span>&nbsp;&nbsp;Tổng Số
                                Chapter:&nbsp;&nbsp;<?php echo e($sl_session); ?></span></li>
                        <li><i class="bi bi-eye"></i><span>&nbsp;&nbsp;<?php echo e($truyen->view_product); ?></span></li>
                    </ul>
                </div>

            </div>
            <div class="col-9 trangtruyen repon700">
                <div class="mgin">
                    <div class="ten-truyen">
                        <h2><?php echo e($truyen->name_product); ?></h2>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary"><i class="bi bi-list-ol"></i><a id="clickchuong"
                                href="#danhsachchuong">&nbsp;&nbsp;Các Chương</a></button>
                                <?php


            ?>
                                <?php if($count == 0): ?>
                        <form action="<?php echo e(route('add_favourite')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name = "user_id" value=<?php echo e(Session::get('id')); ?>>
                            <input type="hidden" name = "product_id" value="<?php echo e($truyen->id); ?>">
                            <button type="submit" class="btn btn-danger wow tada" data-wow-iteration="99999999"
                                data-wow-duration="3s"><i class="bi bi-heart"></i>
                              &nbsp;&nbsp;Yêu thích
                            </button>
                        </form>
                        <?php else: ?>
                        
                   <?php $__currentLoopData = $favourite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $idfavourite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form action="<?php echo e(route('remove_favourite',$idfavourite->id)); ?>" method="post">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger " data-wow-iteration="99999999"
                                data-wow-duration="3s"><i class="bi bi-heart"></i>
                              &nbsp;&nbsp;Un favourite
                            </button>
                        </form>
                       <?php endif; ?>
                    </div>
                    <div class="doctruyen">
                        <?php if($session_dau): ?>
                            <button
                            <?php if($age <= 35): ?>
                                type="submit"
                                href="<?php echo e(route('doctruyen', [$session_dau->id, $session_dau->Product->slug_product, $session_dau->slug_session])); ?>"
                            <?php else: ?>
                                type="button"
                                onclick="alertCart()"
                            <?php endif; ?>
                            class="btn btn-success"><i class="fa-brands fa-readme"></i>&nbsp;&nbsp;<a
                            >Đọc
                            Truyện</a></button>
                        <?php else: ?>
                            <button type="button" class="btn btn-danger"><i
                                    class="bi bi-exclamation-diamond"></i>&nbsp;&nbsp;<a href="">Chưa Có
                                    Chương</a></button>
                        <?php endif; ?>
                    </div>
                    <div class="description  " itemprop="description" data-wow-duration="10s">
                        <?php echo $truyen->content_product; ?>

                    </div>
                </div>
            </div>
        </div>
        
        <?php
        $sl_session = count($session);
        ?>
        <?php if($sl_session == 0): ?>
        <?php else: ?>
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3">
                <h3>CHƯƠNG MỚI RA</h3>
            </div>
            <div class="owl-carousel owl-theme" data-wow-delay="0.8s" data-wow-duration="2s">
                <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('session_view', [$item->id, $item->slug_session])); ?>">
                        <div class="item">
                            <img src="/uploads/img_truyen/<?php echo e($item->Product->img_product); ?>" alt="">
                            <div class="owl-nd">
                                <p><i class="bi bi-eye"></i>&nbsp;<?php echo e($item->view_session); ?></p>
                                <p id="danhsachchuong">Tập <?php echo e($item->session); ?>: <?php echo e($item->title_session); ?></p>

                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3">
                <h3>DANH SÁCH CHƯƠNG</h3>
            </div>
            <div class="danhsachchuong">
                <?php if($sl_session > 0): ?>
                    <ul>
                        <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('session_view', [$item->id, $item->slug_session])); ?>"><img
                                        src="/uploads/img_truyen/<?php echo e($truyen->img_product); ?>" alt="" width="50px"
                                        height="50px">&nbsp;&nbsp;&nbsp; Tập <?php echo e($item->session); ?> :
                                    <?php echo e($item->title_session); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php else: ?>
                    <div class="thongbao wow fadeOut  " data-wow-delay="0.5s" data-wow-duration="1.5s"
                        data-wow-iteration="99999999"><i class="bi bi-info-circle"></i>&nbsp;&nbsp;Hiện tại Chưa Có Chương,
                        Mời Bạn Quay Lại Sau !</div>
                        <?php endif; ?>
            </div>

            <div><?php echo e($session->links()); ?></div>

        </div>
        

        
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3">
                <h3>TRUYỆN HAY</h3>
            </div>
            <div class="owl-carousel owl-theme wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="2s">
                <?php $__currentLoopData = $truyenhay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('trangtruyen', [$item->id, $item->slug_product])); ?>">
                        <div class="item">
                            <img src="/uploads/img_truyen/<?php echo e($item->img_product); ?>" alt="">
                            <div class="owl-nd">
                                <p><i class="bi bi-eye"></i>&nbsp;<?php echo e($item->view_product); ?></p>
                                <p><?php echo e($item->name_product); ?></p>

                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    

    
    <div class="col-3 col3tt">
        <?php echo $__env->make('Website/menudanhmuc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();

        function alertCart(){
            swal({
            title: "Truyện không phù hợp với lứa tuổi của bạn!",
            text: "!!!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            });
        }
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Website/form_trang_truyen.blade.php ENDPATH**/ ?>