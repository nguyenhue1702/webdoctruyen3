
<?php $__env->startSection('comic_category'); ?>
    <div class="row px-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Add Category</h3>

            </div>
            <form action="<?php echo e(route('add_dm')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php if($errors->any()): ?>
    <div class="alert alert-danger ">
        <i class="fa-solid fa-triangle-exclamation"></i> Vui Lòng Kiểm tra Dữ liệu !
    </div>
<?php endif; ?>
                <div class="mb-3 ">
                    <input type="text" name="danhmuc" value="<?php echo e(old('danhmuc')); ?>"class="form-control" placeholder="Enter Category" id="slug"
                        onkeyup="ChangeToSlug()">
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
                    <input spellcheck="false" type="text" name="slugdm" class="form-control" placeholder="Enter Slug"
                        id="convert_slug" value="<?php echo e(old('slugdm')); ?>">
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
                    <button type="submit" class="btn btn-success">Apply</button>
                </div>
            </form>
            <hr class="hr">
            <div class="mb-3 phanloai">

                <h3>List Category</h3>
    
            </div>
            <div class="mb-3">
                <table class="table table-sm " id="dataTables-example">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Setting</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tendms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tendm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($tendm->id); ?></td>
                                <td><?php echo e($tendm->danhmuc); ?></td>
                                <td><?php echo e($tendm->slugdm); ?></td>
                                <td>
                                    <div class="thaotac">
                                        <button><a href="<?php echo e(route('editdm', $tendm->id)); ?>"
                                                class="btn-sua"><i
                                                    class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                        <form action="<?php echo e(route('delete_dm', $tendm->id)); ?>" method="post"
                                            class="dele">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                                                type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                       
            </div>

        </div>

        <div class="col-3"></div>
    </div>
    <script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Admin/comic_category.blade.php ENDPATH**/ ?>