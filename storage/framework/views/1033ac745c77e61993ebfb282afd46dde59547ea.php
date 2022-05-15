<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="assets/css/login.css">
    </head>

    <body>
        <div class="container">
            <div class="log">
                <h1>Sign Up</h1>
                </div><br><br>
            <form action="/registrasi" method="post">
                <?php echo csrf_field(); ?>
               <br>
                <input type="text" class="form-control rounded-top <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" id="username" placeholder="Username" style="border-color: black " required value="<?php echo e(old('username')); ?>">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback" style="color: red">
                        <?php echo e($message); ?>

                    </div><br>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <br>
                <input type="password" id="password" placeholder="Password" name="password" class="form-control rounded-top <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" ><br>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback" style="color: red">
                        <?php echo e($message); ?>

                    </div><br>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button style="border-color:#FF8C00; margin-bottom: 10px;" type="submit">Registration</button>
                <p>Already have an account? <a href="/login">login here</a></p>
            </form>
        </div>
    </body>
</html><?php /**PATH E:\LARAVEL\kelompok-03\resources\views/register/registrasi.blade.php ENDPATH**/ ?>