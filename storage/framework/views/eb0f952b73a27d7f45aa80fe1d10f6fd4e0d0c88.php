<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/login.css">
    </head>

    <body>
        <div class="container">
            <div class="login">
                <img src="assets/img/profile.jpg">
          <h1>Sign In</h1>
          </div>
            <form action="/login" method="POST">
                <?php echo csrf_field(); ?>
                <label></label><br>
                <input type="text" name="username" placeholder="Username" style="border-color: black "><br>
                <label></label><br>
                <input type="password" placeholder="Password" name="password"><br>
                <button><a href="index">Login</a></button>
                <p><center>don't have an account yet? </center></p>
                <button style="border-color:#FF8C00; margin-bottom: 10px;"><a href="/registrasi">Registration</a></button>
            </form>
        </div>
    </body>
</html>
<?php /**PATH E:\LARAVEL\kelompok-03\resources\views/login.blade.php ENDPATH**/ ?>