
<?php $__env->startSection('sessionview'); ?>
    <div class="col-9  reponsive-col9 " id="story-detail">
        
        <div class="row nav-bread reponsive-col9">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('trangtruyen',[$session->Product->id,$session->Product->slug_product])); ?>"><?php echo e($session->Product->name_product); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($session->session); ?></li>
                </ol>
            </nav>
        </div>
        <div class="row reponsive-col9 formnen ss_title ">
            <h2 style="font-size: 20px"><i
                    class="bi bi-book"></i>&nbsp;&nbsp;<strong><?php echo e($session->Product->name_product); ?> </strong></h2>
        </div>

        
        <div class="row reponsive-col9 formnen">
            <div class="col-3 img_trangtruyen">
                <div>
                    <img src="/uploads/img_truyen/<?php echo e($session->Product->img_product); ?>" alt="">
                </div>
                <div id="danhsachchuong">
                    <ul>
                        <li><i class="bi bi-person-fill"></i><a
                                href="">&nbsp;&nbsp;<?php echo e($session->Product->Author->name_author); ?></a></li>
                                <div class="style-dm">
                                    <div><i class="bi bi-folder2-open"></i> </div>
                                    <?php $__currentLoopData = $session->Product->thuocnhieudanhmuctruyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhmucs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                     <div class="mini-dm"><a href="<?php echo e(route('xemtheodanhmuc',[$danhmucs->id,$danhmucs->slugdm])); ?>"><?php echo e($danhmucs->danhmuc); ?>  </a></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="style-dm">
                                    <div><i class="bi bi-tag"></i> </div>
                                    <?php $__currentLoopData = $session->Product->thuocnhieutheloaitruyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theloais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                     <div class="mini-tl"><a href="<?php echo e(route('xemtheotheloai',[$theloais->id,$theloais->slugtl])); ?>" class="tag"><?php echo e($theloais->theloai); ?>  </a></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                        <li><i class="bi bi-info-circle"></i><span>&nbsp;&nbsp;Số chapter hiện tại :&nbsp;&nbsp;<?php echo e($biendem); ?></span></li>
                       
                    </ul>
                </div>

            </div>
            <div class="col-9 trangtruyen repon700">
                <div class="ten-truyen">
                    <h2>Tập <?php echo e($session->session); ?> : <i style="font-size: 18px"><?php echo e($session->title_session); ?></i></h2>
                    <li class="px-2" ><i class="bi bi-eye "></i><span class="style-view">&nbsp;&nbsp;<?php echo e(number_format($session->view_session)); ?></span></li>
                </div>
                <div>
                    <button type="button" class="btn btn-primary"><i class="bi bi-list-ol"></i><a
                            href="#danhsachchuong">&nbsp;&nbsp;Các Chương</a></button>
                </div>
                
                <div class="doctruyen">
                    <button type="button" class="btn btn-success"><i class="fa-brands fa-readme"></i>&nbsp;&nbsp;<a
                            href="<?php echo e(route('doctruyen', [$session->id,$session->Product->slug_product, $session->slug_session])); ?>">Đọc Chương</a></button>
                </div>
                <div class="description  " itemprop="description" data-wow-duration="10s">
                    <?php echo $session->tomtat_session; ?>

                </div>
            </div>
        </div>
        
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3">
                <h3>DANH SÁCH CÁC CHƯƠNG</h3>
            </div>
            <div class="danhsachchuong">
                <ul>
                    <?php $__currentLoopData = $session_truyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li ><a class="py-2" href="<?php echo e(route('session_view', [$item->id, $item->slug_session])); ?>"><img
                                    src="/uploads/img_truyen/<?php echo e($item->Product->img_product); ?>" alt="" width="50px"
                                    height="50px">&nbsp;&nbsp;&nbsp;Tập <?php echo e($item->session); ?> : <?php echo e($item->title_session); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </ul>
            </div>
            <div><?php echo e($session_truyen->links()); ?></div>
        </div>
        
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3">
                <h3>NHẬN XÉT CỦA ĐỘC GIẢ </h3>
            </div>
            <form action="">
                <div class="nhanxet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Enter Comment....."></textarea>
                </div>
                <div class="binhluan">
                    <button type="button" class="btn btn-sm btn-success"><i
                            class="bi bi-send"></i>&nbsp;&nbsp;Send</button>
                </div>
            </form>
            <div class="showcm">
                <div class="info_user">
                    <div>
                        <img src="/uploads/img_truyen/77.jpg" alt="" width="50px" height="50px">
                    </div>
                    <div>
                        Nguyễn Thị Huệ
                    </div>
                    <div>
                        25/01/2022
                    </div>
                </div>
                <div class="ndcm">
                    Bootstrap’s interactive components—such as modal dialogs, dropdown menus, and custom tooltips—are
                    designed to work for touch, mouse, and keyboard users. Through the use of relevant WAI-ARIA roles and
                    attributes, these components should also be understandable and operable using assistive technologies
                    (such as screen readers).
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-3 col3tt">
        <?php echo $__env->make('Website/menudoc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Website/session_view.blade.php ENDPATH**/ ?>