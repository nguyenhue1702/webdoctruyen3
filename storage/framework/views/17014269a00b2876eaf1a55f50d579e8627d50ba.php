
<?php $__env->startSection('doctruyen'); ?>
    <div class="container">
        <div class="nav-bread reponsive-col9 repon">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('Home')); ?>"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($view_session->Product->name_product); ?></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($view_session->session); ?></li>
                </ol>
            </nav>
        </div>
        <div class="reponsive-col9 formnen view-truyen repon">
            <h4><?php echo e($view_session->updated_at); ?></h4>
            <h2><strong><?php echo e($view_session->Product->name_product); ?></strong></h2>
            <h3><strong>Tập <?php echo e($view_session->session); ?></strong> : <i><?php echo e($view_session->title_session); ?></i></h3>
            <h5><i class="bi bi-person-fill"></i><i><?php echo e($view_session->Product->Author->name_author); ?></i></h5>

            <div class="controller">
                <div class="chonchuong">
                     
                    <select class="form-select" id="dynamic_select1">
                        <?php $__currentLoopData = $all_session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e(url('view', [$item->id,$item->Product->slug_product,$item->slug_session])); ?>">Tập <?php echo e($item->session); ?>:
                                <?php echo e($item->title_session); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="ctr-right">
                
                    <button class="btn btn-primary trcsau <?php echo e($view_session->id == $min_id->id ? 'isDisable' : ''); ?>"><a
                            href="<?php echo e(url('view',  [ $pre_session,$view_session->Product->slug_product,$pre_slug ] )); ?>"><i class="bi bi-chevron-left"></i>
                            Tập Trước</a></button>
                            
                   
                    <button class="btn btn-primary trcsau <?php echo e($view_session->id == $max_id->id ? 'isDisable' : ''); ?> "><a
                            href="<?php echo e(url('view', [$next_session,$view_session->Product->slug_product,$next_slug])); ?>"> Tập Sau <i
                                class="bi bi-chevron-right"></i></a></button>
                              
                </div>
            </div>
        </div>
        <div class="reponsive-col9 formnen view-truyen repon">
            <?php echo $view_session->content_session; ?>

        </div>
        <div class="reponsive-col9 formnen view-truyen repon">
            <div class="controller">
                <div class="chonchuong">
                    <select class="form-select" aria-label="Default select example" id="dynamic_select">
                        <?php $__currentLoopData = $all_session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e(route('doctruyen', [$item->id,$item->Product->slug_product, $item->slug_session])); ?>">Tập <?php echo e($item->session); ?>:
                                <?php echo e($item->title_session); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="ctr-right">
                    <button class="btn btn-primary trcsau <?php echo e($view_session->id == $min_id->id ? 'isDisable' : ''); ?>">
                        <a href="<?php echo e(url('view', [ $pre_session,$view_session->Product->slug_product,$pre_slug])); ?>"><i class="bi bi-chevron-left"></i>
                            Tập Trước</a>
                    </button>
                    <button class="btn btn-primary trcsau <?php echo e($view_session->id == $max_id->id ? 'isDisable' : ''); ?> ">
                        <a href="<?php echo e(url('view', [$next_session,$view_session->Product->slug_product,$next_slug])); ?>"> Tập Sau <i
                                class="bi bi-chevron-right"></i></a>
                    </button>
                </div>
            </div>
        </div>

       
    
     
    
        <div class="  reponsive-col9  formnen repon ">
            <div class="styleh3">
                <h3 class="style-lai">&nbsp;&nbsp;NHẬN XÉT </h3>
            </div>
            <form action="<?php echo e(route('insert_comment')); ?>" method="post">
                <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value=<?php echo e(Session::get('id')); ?>>
            <input type="hidden" name="session_id" value="<?php echo e($view_session->id); ?>">
            <div class="nhanxet">
                <textarea name="comment" id="" cols="30" rows="10" placeholder="Enter Comment....."></textarea>
            </div>
          
            <div class="binhluan">
                <button type="submit" class="btn btn-sm btn-success"><i class="bi bi-send"></i>&nbsp;&nbsp;Send</button>
            </div>
            </form>
            <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="showcm">
                <div class="info_user">
                    <div>
                        <img src="/uploads/img_truyen/77.jpg" alt="" width="50px" height="50px">
                    </div>
                    <div>
                        <?php echo e($item->Comment_user->name); ?>

                    </div>
                    <div class="ngaythang-comment">
                       <small ><?php echo e($item->created_at); ?></small>
                    </div>
                </div>
                <div class="ndcm">
                    <?php echo e($item->comment); ?>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
            <div class="mt-3 ">
                <?php echo e($comment->links()); ?>

            </div>
            
        </div>
      
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/website_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/Website/doctruyen.blade.php ENDPATH**/ ?>