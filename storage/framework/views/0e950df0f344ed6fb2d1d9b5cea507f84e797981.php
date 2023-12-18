
<?php $__env->startSection('all_baiviet_user'); ?>

<div class="container" >
    <?php
    $count = count($baiviet);
?>
<?php if($count == 0): ?>
<div class="content-list">
    <div class="thongbao-sai mt-5">
        Hiện tại chưa có truyện !
    </div>
    
</div>
 
<?php else: ?>
<?php if(  $count == 1): ?>
<div class="row  mt-5 ">
    <h3 class="lb-user">Tất cả truyện của độc giả</h3>
    <?php $__currentLoopData = $baiviet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="list-group mt-3 pd-5 ">
        <a href="<?php echo e(route('view_truyen_user',[$item->id,$item->slug])); ?>" class="list-group-item list-group-item-action tieu-de-truyen">
            <div class="d-flex w-100 justify-content-between de-truyen">
                <h4><?php echo e($item->title); ?></h4>
                <small ><?php echo e($item->created_at); ?></small>
                <small class="name-docgia"><?php echo e($item->User_baiviet->name); ?></small>
              
            </div>        
            <div class="small-content">  <p ><?php echo $item->content; ?></p></div>   
           
        </a>
    </div>
    
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="mt-3">
        <?php echo e($baiviet->links()); ?>

    </div>
</div>
<div class="count-1">
</div>

<?php else: ?>
<?php if(  $count == 2): ?>
<div class="row  mt-5 ">
    <h3 class="lb-user">Tất cả truyện của độc giả</h3>
    <?php $__currentLoopData = $baiviet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="list-group mt-3 pd-5 ">
        <a href="<?php echo e(route('view_truyen_user',[$item->id,$item->slug])); ?>" class="list-group-item list-group-item-action tieu-de-truyen">
            <div class="d-flex w-100 justify-content-between de-truyen">
                <h4><?php echo e($item->title); ?></h4>
                <small><?php echo e($item->created_at); ?></small> |
                <small class="name-docgia"><?php echo e($item->User_baiviet->name); ?></small>
              
            </div>   
            <div class="small-content">  <p ><?php echo $item->content; ?></p></div>     
        
           
        </a>
    </div>
    
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="mt-3">
        <?php echo e($baiviet->links()); ?>

    </div>
</div>
<div class="count-2">
</div>
<?php else: ?>
<div class="row  mt-5">
    <h3 class="lb-user">Tất cả truyện của độc giả</h3>
    <?php $__currentLoopData = $baiviet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="list-group mt-3 pd-5 ">
        <a href="<?php echo e(route('view_truyen_user',[$item->id,$item->slug])); ?>" class="list-group-item list-group-item-action tieu-de-truyen">
            <div class="d-flex w-100 justify-content-between de-truyen">
                <h4><?php echo e($item->title); ?></h4>
                <small><?php echo e($item->created_at); ?></small>
                <small class="name-docgia"><?php echo e($item->User_baiviet->name); ?></small>
              
            </div>        
            <div class="small-content">  <p ><?php echo $item->content; ?></p></div>   
           
        </a>
    </div>
    
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="mt-3">
        <?php echo e($baiviet->links()); ?>

    </div>
</div>
<?php endif; ?>
<?php endif; ?>
 <?php endif; ?>   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdoctruyen3\resources\views/Website/all_baiviet_user.blade.php ENDPATH**/ ?>