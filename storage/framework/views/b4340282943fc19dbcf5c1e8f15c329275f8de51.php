
<?php $__env->startSection('Publishing_new'); ?>
    <div class="text codinh">New Publishing</div>
    <form action="<?php echo e(route('new_publishing')); ?>" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-create ">

            <div class="tuan-input">
                <input type="text" spellcheck="false" required name="name_publishing">
                <label for="">Name Publishing</label>
            </div>
            <div class="tuan-input moveip">
                <input type="text" spellcheck="false" required name="address">
                <label for="">Enter Address</label>
            </div>
            <div class="movehinh">
                <input type="file" spellcheck="false" required name="img_publishing" id="imageFile"
                    onchange="chooseFile(this)" required="true">
            </div>

            <div class="img-show"><img src="" alt="" style="width:200px; height:280px" id="image"></div>

            <div class="submit">
                <button>Submit</button>
            </div>




        </div>

    </form>
    <script src="<?php echo e(asset('js/img_show.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Admin/Publishing_new.blade.php ENDPATH**/ ?>