<?php $__env->startSection('editdm'); ?>
    <div class="row px-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Chỉnh Sửa Danh Mục</h3>

            </div>
            <form action="<?php echo e(route('updatedm', $tendms->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger ">
                        <i class="fa-solid fa-triangle-exclamation"></i> Vui Lòng Kiểm tra Dữ liệu !
                    </div>
                <?php endif; ?>
                <div class="mb-3 ">
                    <label for="">Danh Mục :</label>
                    <input type="text" name="danhmuc" value="<?php echo e($tendms->danhmuc); ?>" class="form-control"
                        placeholder="Enter Category" id="slug" onkeyup="ChangeToSlug()">
                </div>
                <?php $__errorArgs = ['danhmuc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="validation-thongbao"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="mb-3 ">
                    <label for="">Slug Danh Mục:</label>
                    <input spellcheck="false" type="text" name="slugdm" class="form-control" placeholder="Enter Slug"
                        id="convert_slug" value="<?php echo e($tendms->slugdm); ?>">
                </div>
                <?php $__errorArgs = ['slugdm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="validation-thongbao"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Xác Nhận</button>
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Admin/editdm.blade.php ENDPATH**/ ?>