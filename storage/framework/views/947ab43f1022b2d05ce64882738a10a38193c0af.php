
<?php $__env->startSection('Publishing'); ?>
    <div class="text codinh">List Publishing</div>
    <div class="form-danhsach">
        <div class="table-list">

            <table id="dataTables-example">
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Nhà Xuất Bản</td>
                        <td>Hình Ảnh</td>
                        <td>Địa Chỉ</td>
                        <td>Thao Tác</td>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $publishings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publishing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($publishing->id); ?></th>
                            <th><?php echo e($publishing->name_publishing); ?></th>
                            <th class="pd-10">
                                <img src="/uploads/img_publishing/<?php echo e($publishing->img_publishing); ?>" alt="" srcset="">
                            </th>
                            <th><?php echo e($publishing->address); ?></th>

                            <th>
                                <div class="thaotac">
                                    <button><a href="<?php echo e(route('edit_publishing', $publishing->id)); ?>"
                                            class="btn-sua"><i class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                    <form action="<?php echo e(route('delete_publishing', $publishing->id)); ?>" method="post"
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
    <div class="Add movie author-move">
        <button>
            <a href="<?php echo e(route('create_publishing')); ?>" style="display: flex;"><i class='bx bxs-file-plus'
                    style="font-size:30px; line-height:40px"></i>ADD New</a>
        </button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Admin/Publishing_list.blade.php ENDPATH**/ ?>