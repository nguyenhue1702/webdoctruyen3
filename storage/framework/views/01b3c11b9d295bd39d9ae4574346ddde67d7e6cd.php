
<?php $__env->startSection('baiviet_user'); ?>
<div class="row px-5 py-3">
    <div class="col-3"></div>

    <div class="col-6 style-input">

        <hr class="hr">
        <div class="mb-3 phanloai">

            <h3>Danh sách bài đăng của người dùng</h3>

        </div>
        <div class="mb-3">
            <table class="table table-sm " id="dataTables-example">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Status</th>
                        <th scope="col">User</th>
                        <th scope="col">Control</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td>
                            <textarea name="" id="" cols="30" rows="3"><?php echo $item->content; ?></textarea>
                        </td>
                        <td>
                            <input type="checkbox" class="toggle-baivietuser" data-id="<?php echo e($item->id); ?>" data-toggle="toggle" data-style="slow" data-on="Success" data-off="Waiting" <?php echo e($item->apply == true ? 'checked' : ''); ?>>

                        </td>

                        <td><?php echo e($item->user_baiviet->name); ?></td>

                        <td>
                            <div class="thaotac">
                                <button><a href="<?php echo e(route('edit_bv_user', $item->id)); ?>" class="btn-sua"><i class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;

                                <form action="<?php echo e(route('delete_bv_user', $item->id)); ?>" method="post" class="dele">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>

    </div>

    <div class="col-3"></div>
</div>
<script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Admin/baiviet_user.blade.php ENDPATH**/ ?>