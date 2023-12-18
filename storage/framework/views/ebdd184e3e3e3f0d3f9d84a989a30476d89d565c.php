
<?php $__env->startSection('product_new'); ?>
    <div class="row ps-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Add Comics</h3>

            </div>
            <form action="<?php echo e(route('add_product')); ?>" enctype="multipart/form-data" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3 ">
                    <input type="text" name="name_product" placeholder="Name Comics" class="form-control" id="slug"
                        onkeyup="ChangeToSlug()" value="<?php echo e(old('name_product')); ?>">
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
                        id="convert_slug" value="<?php echo e(old('slug_product')); ?>">
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
                    <img type src="" alt="" style="width:110px; height:140px" id="image" style="background-size:cover;">
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
                    <label for=""><b>Danh Mục :</b>  </label><br>

                    <?php $__currentLoopData = $danhmucs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" name="danhmuc[]" type="checkbox" id=" danhmuc_<?php echo e($dm->id); ?>"
                                value="<?php echo e($dm->id); ?>" >
                            <label class="form-check-label" for="danhmuc_<?php echo e($dm->id); ?>"><?php echo e($dm->danhmuc); ?></label>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mb-3">
                    <label for=""><b>Thể Loại :</b>  </label><br>

                    <?php $__currentLoopData = $theloais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="checkbox" id="theloai_<?php echo e($item->id); ?> " name="theloai[]"
                                value="<?php echo e($item->id); ?>" >
                            <label class="form-check-label" for="theloai_<?php echo e($item->id); ?>0"><?php echo e($item->theloai); ?></label>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mb-3">
                    <label for=""><b>
                        Thông tin thêm :<b></label>
                </div>
                <div class="mb-3">
                    <label for="">Tác giả :</label>
                    <select name="id_author" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <?php $__currentLoopData = $tacgias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tacgia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tacgia->id); ?>"><?php echo e($tacgia->name_author); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Truyện Nổi Bật:</label>
                    <select name="hot" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="0">Nổi Bật</option>
                        <option value="1">Không Nổi Bật</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Trạng thái:</label>
                    <select name="tinhtrang" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="0">Đang cập nhật </option>
                        <option value="1">Hoàn Thành</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Hiển Thị :</label>
                    <select name="kichhoat" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="0">Kích Hoạt</option>
                        <option value="1">Không Kích Hoạt</option>
                    </select>
                </div>


                <div class="mb-3 ">
                    <label class="form-label">Tóm Tắt :</label>
                    <textarea id="noidungtruyen" name="content_product" id="" cols="150"
                        rows="36"><?php echo e(old('content_product')); ?></textarea>
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

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Admin/product_new.blade.php ENDPATH**/ ?>