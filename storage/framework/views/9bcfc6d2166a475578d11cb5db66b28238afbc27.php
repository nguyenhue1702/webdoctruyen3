
<?php $__env->startSection('bv_user'); ?>
    <div class="row px-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Edit Bài Viết</h3>

            </div>
            <form action="<?php echo e(route('update_bv_user',$bv_user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
               
                
                <div class="mb-3 ">
                    <select name="apply" id="">
                        <?php if( $bv_user->apply==  1 ): ?>
                        <option value="1" selected>Duyệt</option>
                        <option value="0">Chờ xác Nhận</option>
                        <?php else: ?>
                        <option value="1">Duyệt</option>
                        <option value="0" selected>Chờ xác Nhận</option>
                        <?php endif; ?>
                    </select>
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Admin/edit_bv_user.blade.php ENDPATH**/ ?>