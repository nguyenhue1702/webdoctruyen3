
<?php $__env->startSection('user_edit'); ?>
<div class="row px-5 py-3">
    <div class="col-3"></div>

    <div class="col-6 style-input">
        <div class="mb-3 phanloai">

            <h3>Edit User    <h3><span class="edit-user"><?php echo e($user->email); ?></Span></h3></h3>

        </div>
        <form action="<?php echo e(route('update_user', $user->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <input type="hidden" name="name" value="<?php echo e($user->name); ?>">
            </div>
            <div class="mb-3">
                <input type="hidden" name="email" value="<?php echo e($user->email); ?>">
            </div>
            <div class="mb-3">
                <input type="hidden" name="password" value="<?php echo e($user->password); ?>">
            </div>
            <div class="mb-3">
              
            </div>
            <div class="mb-3 ">
                <label for="" class="mb-2">Select Role</label>
             
                <select name="role" id="" class="select-user">
                    
                   
                <?php if($user->role == 2): ?>
                    <option value="0" style="color: rgb(2, 160, 165)" >User</option>
                    <option value="1" style="color:rgb(17, 167, 3)">Personnel</option>
                    <option value="2" selected style="color:rgb(255, 0, 0)">Admin</option>
                <?php else: ?>
                <?php if($user->role == 1): ?>
                <option value="0" style="color: rgb(2, 160, 165)" >User</option>
                <option value="1" selected style="color:rgb(17, 167, 3)">Personnel</option>
                <option value="2"  style="color:rgb(255, 0, 0)">Admin</option>

                <?php else: ?>
                <option value="0" selected  style="color: rgb(2, 160, 165)" >User</option>
                <option value="1" style="color:rgb(17, 167, 3)">Personnel</option>
                <option value="2"  style="color:rgb(255, 0, 0)">Admin</option>
                <?php endif; ?>
                <?php endif; ?>
                </select>
            </div>       
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Admin/user_edit.blade.php ENDPATH**/ ?>