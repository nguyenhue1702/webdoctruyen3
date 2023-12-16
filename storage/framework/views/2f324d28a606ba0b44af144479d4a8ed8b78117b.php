
<?php $__env->startSection('article_list'); ?>
    <div class="text codinh">Danh Sách Bài Viết</div>
    <div class="form-danhsach">
        <div class="table-list">

            <table id="dataTables-example">
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Tên Bài</td>
                        <td>Hình Ảnh</td>
                        <td>Nội Dung</td>
                        <td>Thao Tác</td>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $baiviets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baiviet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($baiviet->id); ?></th>
                            <th><?php echo e($baiviet->name_bv); ?></th>
                            <th class="pd-10">
                                <img src="/uploads/img_baiviet/<?php echo e($baiviet->hinhanh_bv); ?>" alt="" srcset="">
                            </th>
                            <th>
                                <textarea class="kchon" name="" id="" cols="150" rows="7" disabled><?php echo e($baiviet->info_bv); ?></textarea>
                            </th>
                            <th>
                                <div class="thaotac">
                                    <button><a href="<?php echo e(route('edit_baiviet', $baiviet->id)); ?>" class="btn-sua"><i
                                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                    <form action="<?php echo e(route('article_delete', $baiviet->id)); ?>" method="post"
                                        class="dele">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                                            type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                            </th>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
    <div class="Add movie">
        <button>
            <a href="<?php echo e(route('form_create_article')); ?>" style="display: flex;"><i class='bx bxs-file-plus'
                    style="font-size:30px; line-height:40px"></i>ADD New</a>
        </button>
    </div>
<?php $__env->stopSection(); ?>

<?php if(Session::has('ok')): ?>
    <script>
        toastr.options = {
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            "closeMethod": "slideUp",
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-center ",
        }
        toastr.success("<?php echo e(session('ok')); ?>", "Thành Công");
    </script>
<?php endif; ?>

<?php if(Session::has('loi')): ?>
    <script>
        toastr.options = {
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            "closeMethod": "slideUp",
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-center ",
        }
        toastr.error("<?php echo e(session('loi')); ?>", "Erro");
    </script>
<?php endif; ?>

<?php if(Session::has('info')): ?>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("<?php echo e(session('info')); ?>");
    </script>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("<?php echo e(session('warning')); ?>");
    </script>
<?php endif; ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Admin/article_list.blade.php ENDPATH**/ ?>