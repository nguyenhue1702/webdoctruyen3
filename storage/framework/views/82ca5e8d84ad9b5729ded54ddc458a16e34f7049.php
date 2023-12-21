<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/css/repondangki.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('/css/dangki.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="<?php echo e(asset('/css/animate.css')); ?>">
    <title>Đăng ký</title>
</head>
<style>
    input[type="date"]::-webkit-calendar-picker-indicator {
    color: rgba(0, 0, 0, 0);
    opacity: 1;
    display: block;
    background: url(https://mywildalberta.ca/images/GFX-MWA-Parks-Reservations.png) no-repeat;
    width: 20px;
    height: 20px;
    border-width: thin;
}
</style>
<body>
    <form action="<?php echo e(route('DangKi')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="container">
            <div class="nenquay"></div>
            <div class="nenquay2"></div>
            <div class="row bg-color px-5 py-5 form-re">
                <div class="col-6"></div>
                <div class="col">
                    <div class="row chuxoay wow fadeInLeft ">--ĐĂNG KÝ NGAY-- </div>
                </div>
                <div class="col-5">
                    <div class="mb-3 title ">

                        <div>
                            <h3>Đăng Ký</h3>
                        </div>

                        <div><a href="<?php echo e(route('FormLoginAdmin')); ?>">Đăng Nhập</a>&nbsp;  |&nbsp;  <a href="<?php echo e(route('Home')); ?>"><i class="fa-solid fa-house" style="font-size: 20px"></i></a></div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nhập Tên</label>
                        <div class="input-i">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập Tên"
                                name="name" value="<?php echo e(old('name')); ?>">
                            <i class="fa-solid fa-user" style="color: black"></i>
                        </div>

                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: rgb(255, 0, 0)"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3 tranform-i">
                        <label for="exampleInputEmail1" class="form-label">Nhập Địa Chỉ Email</label>
                        <div class="input-i">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nhập Địa Chỉ Email" name="email" value="<?php echo e(old('email')); ?>">
                            <i class="fa-solid fa-envelope" style="color: black"></i>
                        </div>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3 tranform-i">
                        <label for="exampleInputEmail1" class="form-label">Nhập Ngày Sinh</label>
                        <div class="input-i">
                            <input type="date" class="form-control" id="birthday"
                                 placeholder="Nhập Ngày Sinh" name="birthday" value="<?php echo e(old('birthday')); ?>">
                        </div>

                        <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nhập Mật Khẩu</label>
                        <div class="input-i">
                            <input type="password" class="form-control" id="pass" placeholder="Nhập Mật Khẩu"
                                name="password" >
                            <i class="fa-solid fa-eye-slash" style="color: black" id="eye" onclick="toggle()"></i>
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Nhập Lại Mật Khẩu</label>
                        <div class="input-i">
                        <input type="password" class="form-control" id="repass" placeholder="Nhập Lại Mật Khẩu"
                            name="password_confirmation">
                        </div>
                    </div>
                    <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="mb-5 ">
                        <button type="submit" class="sb-Register" >Đăng Ký</button>
                    </div>

                </div>

            </div>

        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/show_pass.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/wowanimate.min.js')); ?>"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\webdoctruyen3\resources\views/User/register.blade.php ENDPATH**/ ?>