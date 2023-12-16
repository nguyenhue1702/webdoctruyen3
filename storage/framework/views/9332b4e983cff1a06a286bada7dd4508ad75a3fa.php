
<?php $__env->startSection('author_list'); ?>
<div class="row ps-5 py-3">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i
                        class="bi bi-house-door-fill"></i>&nbsp;Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Comics</li>
        </ol>
    </nav>
</div>
    <div class="row px-5 py-3">
       <div class="phanloai">
       <div>
           <h3>List Author</h3>
       </div>
       <div>
        <a href="<?php echo e(route('createauthor')); ?>" style="display: flex;"><button type="button" class="btn btn-primary">ADD</button></a>
       </div>
       </div>
    </div>
<div class="row px-5">
    <table class="table table-sm " id="dataTables-example">
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Img</th>
            <th scope="col">Year</th>
            <th scope="col">Country</th>
            <th scope="col">Setting</th>

          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($author->id); ?></td>
            <td><?php echo e($author->name_author); ?></td>
            <td><img src="/uploads/img_author/<?php echo e($author->img_author); ?>" alt="" srcset="" width="70px" height="85px"></td>
            <td><?php echo e($author->date_author); ?></td>
            <td><?php echo e($author->country_author); ?></td>
            <td>
                <div class="thaotac">
                    <button><a href="<?php echo e(route('edit_author', $author->id)); ?>" class="btn-sua"><i
                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                    <form action="<?php echo e(route('delete_author', $author->id)); ?>" method="post"
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

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webtruyen3\resources\views/Admin/author_list.blade.php ENDPATH**/ ?>