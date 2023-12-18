
<?php $__env->startSection('session_new'); ?>
<div class="row ">
    <div class="col-3"></div>

    <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                    <h3>Thêm Chương</h3>

            </div>
        <form action="<?php echo e(route('add_session')); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3 ">
                <label for="">Chương Số:</label>
                <input type="text" name="session" value="<?php echo e(old('session')); ?>" placeholder="Nhập chương số" class="form-control"
                   >
                   <?php $__errorArgs = ['session'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="validation-thongbao"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="title_session"  placeholder="Nhập tên chương"  id="slug" onkeyup="ChangeToSlug()">
            </div>
            <?php $__errorArgs = ['title_session'];
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
                <input spellcheck="false" type="text" name="slug_session" class="form-control" placeholder="Nhập Slug"
                    id="convert_slug" >
                    <?php $__errorArgs = ['slug_session'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="validation-thongbao"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <div class="mb-3">
                <label for="">Thuộc Truyện</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_product">
                    <?php $__currentLoopData = $truyens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name_product); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="">Trạng thái:</label>
                <select name="kichhoat" id="" required class="form-select form-select-sm"
                    aria-label=".form-select-sm example">
                    <option value="0">Kích Hoạt</option>
                    <option value="1">Không Kích Hoạt</option>
                </select>
            </div>

            <div class="mb-3 ">
                <label class="form-label">Tóm Tắt :</label>
                <textarea   id="noidungtruyen1" name="tomtat_session" id="" cols="60" rows="10"></textarea>
                <?php $__errorArgs = ['tomtat_session'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="validation-thongbao"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3 ">
                <label class="form-label">Nội dung :</label>
                <textarea id="noidungtruyen" name="content_session" id="" ><?php echo e(old('content_session')); ?></textarea>
                <?php $__errorArgs = ['content_session'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="validation-thongbao"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Xác Nhận</button>
            </div>
        </form>
    </div>

    <div class="col-3"></div>
</div>
<script src="<?php echo e(asset('js/img_show.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Admin/session_new.blade.php ENDPATH**/ ?>