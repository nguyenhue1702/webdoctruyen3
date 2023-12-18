
<?php $__env->startSection('list_article'); ?>
    <div class="container">
        <?php
            $count = count($baidang);
        ?>
        <?php if($count == 0): ?>
            <div class="content-list">
                <div class="thongbao-sai mt-5">
                    Hiện tại chưa có truyện !
                </div>

            </div>
        <?php else: ?>
            <?php if($count < 3): ?>

                <div class="row  mt-5 khoangcach-test">
                    <h3 class="lb-user">CÁC BÀI VIẾT ĐÃ ĐĂNG</h3>
                    <?php $__currentLoopData = $baidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="list-group mt-3 pd-5 col-11">
                            <a href="" class="list-group-item list-group-item-action tieu-de-truyen">
                                <div class="d-flex w-100 justify-content-between de-truyen">
                                    <h4><?php echo e($item->title); ?></h4>
                                    <small>
                                        <?php if($item->apply == 1): ?>
                                            <i style="color: rgb(98, 163, 1); font-weight: bold">Đã duyệt</i>
                                        <?php else: ?>
                                            <i style="color: red; font-weight: bold">Chờ duyệt</i>
                                        <?php endif; ?>
                                    </small>

                                </div>
                                <div class="small-content">
                                <p ><?php echo $item->content; ?></p>
                            </div>
                                <small><?php echo e($item->created_at); ?></small>

                            </a>
                        </div>
                        <div class="col controller-user mt-3">
                            <button><a href="<?php echo e(route('edit_bv_user_web', $item->id)); ?>" class="btn-sua"><i
                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                    <form action="<?php echo e(route('dele_bv_user_web', $item->id)); ?>" method="post"
                        class="dele">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class= "delete-bv-user"onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                            type="submit"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="mt-3">
                        <?php echo e($baidang->links()); ?>

                    </div>
                </div>
                <?php else: ?>
                <div class="row  mt-5 ">
                    <h3 class="lb-user">CÁC BÀI VIẾT ĐÃ ĐĂNG</h3>
                    <?php $__currentLoopData = $baidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="list-group mt-3 pd-5 col-11">
                            <a href="" class="list-group-item list-group-item-action tieu-de-truyen">
                                <div class="d-flex w-100 justify-content-between de-truyen">
                                    <h4><?php echo e($item->title); ?></h4>
                                    <small>
                                        <?php if($item->apply == 1): ?>
                                            <i style="color: rgb(98, 163, 1); font-weight: bold">Đã duyệt</i>
                                        <?php else: ?>
                                            <i style="color: red; font-weight: bold">Chờ duyệt</i>
                                        <?php endif; ?>
                                    </small>

                                </div>
                                <div class="small-content"><?php echo $item->content; ?></div>
                                <small><?php echo e($item->created_at); ?></small>

                            </a>
                        </div>
                        <div class="col controller-user mt-3">
                            <button><a href="<?php echo e(route('edit_bv_user_web', $item->id)); ?>" class="btn-sua"><i
                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                <br>
                                <br>
                    <form action="<?php echo e(route('dele_bv_user_web', $item->id)); ?>" method="post"
                        class="dele">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button  class= "delete-bv-user"onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                            type="submit"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="mt-3">
                        <?php echo e($baidang->links()); ?>

                    </div>
                </div>
                <?php endif; ?>
            <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views//Website/list_article.blade.php ENDPATH**/ ?>