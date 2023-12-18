
<?php $__env->startSection('article_new'); ?>
    <div class="text codinh ">Thêm Bài Viết</div>
    <form action="<?php echo e(route('submit_article')); ?>" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-create">

            <div class="Admin-Create">
                <div class="nhaplieu">
                    <div>
                        <label for="">Tên Bài Viết</label>
                        <input type="text" placeholder="Nhập Tên Bài Viết" name="name_bv">
                    </div>
                    <br>
                    <div class="hinhanh ">
                        <label for="">Hình Ảnh</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="file" required="true" name="hinhanh_bv" id="imageFile" onchange="chooseFile(this)">
                        <div class="img-hienthi"><img src="" alt="" style="width:200px; height:280px" id="image"></div>

                    </div>
                    <br>
                    <div class="Update">
                        <button>Thêm Bài</button>
                    </div>
                </div>


                <div class="noidung">
                    <label for="">Nội dung</label>
                    <textarea id="" cols="150" rows="25" placeholder="Nhập Nội Dung" name="info_bv" required></textarea>
                </div>

            </div>
        </div>

    </form>
    <script src="<?php echo e(asset('js/img_show.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Admin/article_new.blade.php ENDPATH**/ ?>