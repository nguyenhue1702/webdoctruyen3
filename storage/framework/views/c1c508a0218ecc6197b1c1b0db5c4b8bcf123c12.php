
<?php $__env->startSection('edit_bv_user_web'); ?>
<div class="container" >

    <div class="row dangtruyen mb-5" >
        <h3 class="mt-5 lb-user" >Edit Comic User </h3>
        <form action="<?php echo e(route('update_bv_user_web',$baiviet->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
        <div class="mt-5 mb-3">
            <label class="mb-2 lb-user">Title Comic</label>
            <input type="text" name="title" value="<?php echo e($baiviet->title); ?>" class="form-control" placeholder="Title Comic" id="slug" onkeyup="ChangeToSlug()">
        </div>
        <div class="mb-3">
            <label class="mb-2 lb-user">Slug</label>
            <input id="convert_slug"  value="<?php echo e($baiviet->slug); ?>" type="text" name="slug" class="form-control" placeholder="slug Comic" >
        </div>
        <div class="mb-5">
            <label class="mb-2 lb-user">Conntent</label>
            <textarea name="content"  id="truyenngan" cols="30" rows="10" ><?php echo e($baiviet->content); ?></textarea>
        <input type="hidden" name="user_id" value=  <?php echo e(Session::get('id')); ?>>
        <input type="hidden" name="apply">
    </div>
    <div class="mb-5 submit-user">
        <button class="btn btn-primary btn-xs" type="submit" name="submit" >Submit</button>
    </div>
</form>
</div>
<script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views//Website/edit_bv_user_web.blade.php ENDPATH**/ ?>