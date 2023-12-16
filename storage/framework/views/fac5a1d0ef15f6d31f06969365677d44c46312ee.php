
<?php $__env->startSection('user_article'); ?>
<div class="container" >

    <div class="row dangtruyen mb-5" >
        <h3 class="mt-5 lb-user" >Đăng Truyện Ngắn</h3>
        <form action="<?php echo e(route('sb_article')); ?>" method="post">
            <?php echo csrf_field(); ?>
        <div class="mt-5 mb-3">
            <label class="mb-2 lb-user">Title Comic</label>
            <input type="text" name="tilte" class="form-control" placeholder="Title Comic" id="slug" onkeyup="ChangeToSlug()" required>
        </div>
        <div class="mb-3">
            <label class="mb-2 lb-user">Slug</label>
            <input id="convert_slug" type="text" name="slug" class="form-control" placeholder="slug Comic" required>
        </div>
        <div class="mb-5">
            <label class="mb-2 lb-user">Conntent</label>
            <textarea name="content" id="truyenngan" cols="30" rows="10" required></textarea>
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
<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views//Website/user_article.blade.php ENDPATH**/ ?>