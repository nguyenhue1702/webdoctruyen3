
<?php $__env->startSection('author_edit'); ?>
<div class="row ps-5 py-3">
    <div class="col-3"></div>

    <div class="col-6 style-input">
            <div class="mb-3 phanloai">
                
                    <h3>Edit Author</h3>
                
            </div>
        <form action="<?php echo e(route('updateauthor',$authors->id)); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3 ">
                <input type="text" name="name_author" placeholder="Name Author" class="form-control" value="<?php echo e($authors->name_author); ?>">
            </div>
            <?php $__errorArgs = ['name_author'];
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
                <input spellcheck="false" type="text" name="country_author" class="form-control" placeholder="Country" value="<?php echo e($authors->country_author); ?>">
            </div>
            <?php $__errorArgs = ['country_author'];
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
                <img type src="/uploads/img_author/<?php echo e($authors->img_author); ?>" alt="" style="width:110px; height:140px" id="image" style="background-size:cover;">
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Img Comics</label>
                <input class="form-control form-control-sm" type="file" name="img_author" id="imageFile"
                    onchange="chooseFile(this)" spellcheck="false">

            </div>
            <?php $__errorArgs = ['img_author'];
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
                <input type="date" name="date_author" placeholder="Name Comics" class="form-control" value="<?php echo e($authors->date_author); ?>" >
            </div>
            <?php $__errorArgs = ['date_author'];
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
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Admin/author_edit.blade.php ENDPATH**/ ?>