
<?php $__env->startSection('banner_create'); ?>
<div class="row ">
    <div class="col-3"></div>

    <div class="col-6 style-input">
            <div class="mb-3 phanloai">
                
                    <h3>NEW BANNER</h3>
                
            </div>
        <form action="<?php echo e(route('new_banner')); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
   
            <div class="mb-3 ">
                <label for="">Title Banner :</label>
                <input type="text" name="title_banner" placeholder=" Enter Title Banner" class="form-control" value="<?php echo e(old('title_banner')); ?>"
                   >
                   <?php $__errorArgs = ['title_banner'];
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
                <label for="">Trạng thái:</label>
                <select name="show_banner" id="" required class="form-select form-select-sm"
                    aria-label=".form-select-sm example">
                    <option value="show">Kích Hoạt</option>
                    <option value="hidden">Không Kích Hoạt</option>
                </select>
            </div>
            <div class="mb-3">
                <img type src="" alt="" style="width:870px; height:350px" id="image" style="background-size:cover;">
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Img Comics</label>
                <input class="form-control form-control-sm" type="file" name="img_banner" id="imageFile"
                    onchange="chooseFile(this)">

            </div>
            <?php $__errorArgs = ['img_banner'];
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

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Admin/banner_create.blade.php ENDPATH**/ ?>