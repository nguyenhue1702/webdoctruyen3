
<?php $__env->startSection('theloai_list'); ?>
    <div class="row px-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Thêm Thể Loại</h3>

            </div>
            <form action="<?php echo e(route('add_tl')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger ">
                        <i class="fa-solid fa-triangle-exclamation"></i> Vui Lòng Kiểm tra Dữ liệu !
                    </div>
                <?php endif; ?>
                <div class="mb-3 ">
                    <input type="text" name="theloai" value="<?php echo e(old('name_theloai')); ?>"class="form-control"
                        placeholder="Nhập thể loại" id="slug" onkeyup="ChangeToSlug()">
                </div>
                <?php $__errorArgs = ['name_theloai'];
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
                    <input spellcheck="false" type="text" name="slugtl" class="form-control" placeholder="Nhập Slug"
                        id="convert_slug" value="<?php echo e(old('slugtl')); ?>">
                </div>
                <?php $__errorArgs = ['slugtl'];
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
            <hr class="hr">
            <div class="mb-3 phanloai">

                <h3>Danh Sách</h3>

            </div>
            <div class="mb-3">
                <table class="table table-sm " id="dataTables-example">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $all_theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($tl->id); ?></td>
                                <td><?php echo e($tl->theloai); ?></td>
                                <td><?php echo e($tl->slugtl); ?></td>
                                <td>
                                    <div class="thaotac">
                                        <button><a href="<?php echo e(route('edit_tl', $tl->id)); ?>" class="btn-sua"><i
                                                    class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                        <form action="<?php echo e(route('delete_tl', $tl->id)); ?>" method="post" class="dele">
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

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Admin/theloai_list.blade.php ENDPATH**/ ?>