
<?php $__env->startSection('banner_list'); ?>
<div class="row ps-5 py-3">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i
                        class="bi bi-house-door-fill"></i>&nbsp;Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Banner</li>
        </ol>
    </nav>
</div>
    <div class="row px-5 py-3">
       <div class="phanloai">
       <div>
           <h3>List Banner</h3>
       </div>
       <div>
        <a href="<?php echo e(route('create_banner')); ?>" style="display: flex;"><button type="button" class="btn btn-primary">ADD</button></a>
       </div>
       </div>
    </div>
<div class="row px-5">
    <table class="table table-sm " id="dataTables-example">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Img</th>
            <th scope="col">Status</th>
            <th scope="col">Setting</th>

          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->title_banner); ?></td>
            <td><img src="/uploads/img_banner/<?php echo e($item->img_banner); ?>" alt="" srcset="" width="300px" height="150px"></td>
            <td>
            
                <input  type="checkbox" class="toggle-banner" data-id="<?php echo e($item->id); ?>"
                data-toggle="toggle" data-style="slow" data-on="ON"
                data-off="OFF"<?php echo e($item->show_banner == true ? 'checked' : ''); ?>>
            </td>
        
            <td>
                <div class="thaotac">
                    <button><a href="<?php echo e(route('edit_banner', $item->id)); ?>" class="btn-sua"><i
                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                    <form action="<?php echo e(route('delete_banner', $item->id)); ?>" method="post"
                        class="dele">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Admin/banner_list.blade.php ENDPATH**/ ?>