<?php $__env->startSection('baiviet_user'); ?>
<style>
    .expandable-cell .content {
 max-height: 160px;
 max-width: 300px;
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
                        <th scope="col">Tên truyện</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Hành động</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td class="expandable-cell">
                            <div class="content">
                                <p><?php echo $item->content; ?></p>
                            </div>
                            <button class="toggle-button" onclick="toggleContent(this)">Xem thêm</button>
                        </td>

                        <td>
                            <?php if(Session::get('roleUser') == 1): ?>
                            <input disabled type="checkbox" class="toggle-baivietuser" data-id="<?php echo e($item->id); ?>" data-toggle="toggle" data-style="slow" data-on="Success" data-off="Waiting" <?php echo e($item->apply == true ? 'checked' : ''); ?>>
                            <?php elseif(Session::get('roleUser') == 2): ?>
                            <input type="checkbox" class="toggle-baivietuser" data-id="<?php echo e($item->id); ?>" data-toggle="toggle" data-style="slow" data-on="Success" data-off="Waiting" <?php echo e($item->apply == true ? 'checked' : ''); ?>>
                            <?php endif; ?>
                        </td>

                        <td><?php echo e($item->user_baiviet->name); ?></td>

                        <td>
                            <div class="thaotac">
                                

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
<script src="<?php echo e(asset('js/slug.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Admin/baiviet_user.blade.php ENDPATH**/ ?>