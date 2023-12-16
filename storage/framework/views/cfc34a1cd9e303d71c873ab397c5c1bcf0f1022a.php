<?php $__env->startSection('product_list'); ?>
<style>
     .expandable-cell .content {
  max-height: 160px; /* Đặt chiều cao tối đa để thu gọn */
  overflow: hidden;
  transition: max-height 0.3s ease;
}

/* CSS cho nút "Xem thêm" */
.toggle-button {
  display: block;
  margin-top: 10px;
  cursor: pointer;
  border: 0px;
  background-color: inherit;
}
</style>
    <div class="row ps-5 py-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i class="bi bi-house-door-fill"></i>&nbsp;Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Danh Sách Truyện</li>
            </ol>
        </nav>
    </div>
    <div class="row px-5 py-3">
        <div class="phanloai">
            <div>
                <h3>Danh Sách Truyện</h3>
            </div>
            <div>
                <a href="<?php echo e(route('create_product')); ?>" style="display: flex;"><button type="button"
                        class="btn btn-primary">Thêm truyện</button></a>
            </div>
        </div>
    </div>
    <div class="row px-5">
        <table class="table table-sm " id="dataTables-example">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên truyện</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Slug</th>
                    <th scope="col">HOT</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Đăng truyện</th>
                    <th scope="col">Hành động</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $list_truyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $truyen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($truyen->id); ?></td>
                        <td><?php echo e($truyen->name_product); ?></td>
                        <td><img src="/uploads/img_truyen/<?php echo e($truyen->img_product); ?>" alt="" srcset=""
                                width="70px" height="85px"></td>
                        <td><?php echo e($truyen->slug_product); ?></td>
                        <td>
                            <input  type="checkbox" class="toggle-hot" data-id="<?php echo e($truyen->id); ?>"
                                data-toggle="toggle" data-style="slow" data-on="ON"
                                data-off="OFF"<?php echo e($truyen->hot == false ? 'checked' : ''); ?>>
                        </td>

                        <td class="expandable-cell">
                            <div class="content">
                                <p><?php echo $truyen->content_product; ?></p>
                            </div>
                            <button class="toggle-button" onclick="toggleContent(this)">Xem thêm</button>
                        </td>

                        <td><?php echo e($truyen->Author->name_author); ?></td>
                        <td>
                            <input  type="checkbox" class="toggle-tinhtrang" data-id="<?php echo e($truyen->id); ?>"
                                data-toggle="toggle" data-style="slow" data-on="Full"
                                data-off="Updating"<?php echo e($truyen->tinhtrang == true ? 'checked' : ''); ?>>
                        </td>
                        <td>
                            <input  type="checkbox" class="toggle-edit toggle-product" data-id="<?php echo e($truyen->id); ?>"
                                data-toggle="toggle" data-style="slow" data-on="Enabled"
                                data-off="Disabled"<?php echo e($truyen->kichhoat == false ? 'checked' : ''); ?>>
                        </td>
                        <td>
                            <div class="thaotac">
                                <button><a href="<?php echo e(route('edit_product', $truyen->id)); ?>" class="btn-sua"><i
                                            class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                <form action="<?php echo e(route('delete_truyen', $truyen->id)); ?>" method="post" class="dele">
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
    <script>
        function toggleContent(button) {
          var content = button.previousElementSibling; // Lấy phần tử content trước button
          if (content.style.maxHeight) {
            content.style.maxHeight = null; // Mở rộng nội dung
            button.textContent = "Xem thêm";
          } else {
            content.style.maxHeight = content.scrollHeight + "px"; // Thu gọn nội dung
            button.textContent = "Thu gọn";
          }
        }
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Admin/product_list.blade.php ENDPATH**/ ?>