
<?php $__env->startSection('product_edit'); ?>
    <div class="row">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Edit Comics</h3>

            </div>
            <form action="<?php echo e(route('update_product', $truyens->id)); ?>" enctype="multipart/form-data" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3 ">
                    <input type="text" name="name_product" placeholder="Name Comics" class="form-control" id="slug"
                        onkeyup="ChangeToSlug()" value="<?php echo e($truyens->name_product); ?>">
                </div>
                <?php $__errorArgs = ['name_product'];
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
                    <input spellcheck="false" type="text" name="slug_product" class="form-control" placeholder="Slug"
                        id="convert_slug" value="<?php echo e($truyens->slug_product); ?>">
                </div>
                <?php $__errorArgs = ['slug_product'];
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
                    <img src="/uploads/img_truyen/<?php echo e($truyens->img_product); ?>" type src="" alt=""
                        style="width:110px; height:140px" id="image" style="background-size:cover;">
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Img Comics</label>
                    <input class="form-control form-control-sm" type="file" name="img_product" id="imageFile"
                        onchange="chooseFile(this)">

                </div>
                <?php $__errorArgs = ['img_product'];
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
                    <label for=""><b>Danh Mục :</b> </label><br>

                    <?php $__currentLoopData = $danhmucs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $checked = in_array($dm->id, $thuocdanh) ? 'checked' : '';?>

                        <div class="form-check form-check-inline">

                            <input class="form-check-input" name="danhmuc[]" type="checkbox"
                                id=" danhmuc_<?php echo e($dm->id); ?>" value="<?php echo e($dm->id); ?>" <?php echo e($checked); ?>>
                            <label class="form-check-label" for="danhmuc_<?php echo e($dm->id); ?>"><?php echo e($dm->danhmuc); ?></label>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mb-3">
                    <label for=""><b>Thể Loại :</b> </label><br>

                    <?php $__currentLoopData = $theloais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $checked = in_array($item->id, $thuocloai) ? 'checked' : '';?>
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="checkbox" id="theloai_<?php echo e($item->id); ?> "
                                name="theloai[]" value="<?php echo e($item->id); ?> " <?php echo e($checked); ?>>
                            <label class="form-check-label"
                                for="theloai_<?php echo e($item->id); ?>0"><?php echo e($item->theloai); ?></label>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mb-3">
                    <label for="">Tác giả</label>
                    <select name="id_author" class="form-select form-select-sm" aria-label=".form-select-sm example"
                        required>
                        <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e($item->id == $truyens->id_author ? 'selected' : ''); ?>

                                value="<?php echo e($item->id); ?>">
                                <?php echo e($item->name_author); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Truyện Nổi Bật :</label>
                    <select name="hot" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <?php if($truyens->hot == 0): ?>
                            <option selected value="0">Nổi Bật</option>
                            <option value="1">Không Nổi Bật</option>
                        <?php else: ?>
                            <option value="0">Nổi Bật</option>
                            <option selected value="1">Không Nổi Bật</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Trạng thái:</label>
                    <select name="tinhtrang" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <?php if($truyens->tinhtrang == 0): ?>
                            <option selected value="0">Đang cập nhật</option>
                            <option value="1">Full</option>
                        <?php else: ?>
                            <option value="0">Đang cập nhật</option>
                            <option selected value="1">Full</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Hiển Thị :</label>
                    <select name="kichhoat" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <?php if($truyens->kichhoat == 0): ?>
                            <option selected value="0">Kích Hoạt</option>
                            <option value="1">Không Kích Hoạt</option>
                        <?php else: ?>
                            <option value="0">Kích Hoạt</option>
                            <option selected value="1">Không Kích Hoạt</option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="mb-3 ">
                    <label class="form-label">Tóm Tắt :</label>
                    <textarea id="noidungtruyen" name="content_product" id="" cols="150"
                        rows="36"><?php echo e($truyens->content_product); ?></textarea>
                </div>
                <?php $__errorArgs = ['content_product'];
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
        </div>

        <div class="col-3"></div>
    </div>
    <script src="<?php echo e(asset('js/img_show.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Admin/product_edit.blade.php ENDPATH**/ ?>