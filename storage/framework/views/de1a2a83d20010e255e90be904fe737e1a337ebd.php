
<?php $__env->startSection('user_list'); ?>
<div class="row px-5 py-3">
    <div class="col-3"></div>

    <div class="col-6 style-input">
        
        <hr class="hr">
        <div class="mb-3 phanloai">

            <h3>Danh Sách User</h3>

        </div>
        <div class="mb-3">
            <table class="table table-sm " id="dataTables-example">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Control</th>

                    </tr>
                </thead>
                <tbody>
                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td>
                            <?php if('2' == $item->role): ?>
                            <p style="color: rgb(255, 0, 0)">Admin</p>
                        <?php else: ?>
                        <?php if('1' == $item->role): ?>
                            <p style="color: rgb(21, 255, 0)">Personnel</p>
                            <?php else: ?>
                            <p style="color:rgb(0, 247, 255)">User</p>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                    </td>
                        <td>
                            <div class="thaotac">
                                <button><a href="<?php echo e(route('edit_user',$item->id)); ?>" class="btn-sua"><i
                                            class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                            
                                <form action="<?php echo e(route('delete_user',$item->id)); ?>" method="post" class="dele">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                                        type="submit"><i class="fa-solid fa-trash-can"></i></button>
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
<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Admin/user_list.blade.php ENDPATH**/ ?>