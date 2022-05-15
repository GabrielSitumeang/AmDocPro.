<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/login.css">
    </head>

    <body>

        <div class="container">

            <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:teal">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>

            <?php if(session()->has('loginError')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color:red">
                <?php echo e(session('loginError')); ?>

            </div>
            <?php endif; ?>

            <div class="login">
                <img src="assets/img/profile.jpg">
          <h1>Sign In</h1>
          </div>
            <form action="/login" method="post">
                <?php echo csrf_field(); ?>
                <label></label><br>
                <input type="text" name="username" id="username" placeholder="Username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="border-color: black " autofocus required value="<?php echo e(old('username')); ?>"><br>
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <label></label><br>
                <input type="password" placeholder="Password" name="password" id="password" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required><br>
                <button type="submit">Login</button>
            </form>
            <br>
            <center>
            <small class="d-block text-center mt-3">Not Registered?<a href="/registrasi">Register Now!</a></small>
            </center>
        </div>
    </body>
</html><?php /**PATH E:\LARAVEL\kelompok-03\resources\views/login/login.blade.php ENDPATH**/ ?>