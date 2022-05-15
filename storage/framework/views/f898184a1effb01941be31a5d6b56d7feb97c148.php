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
            <form action="/registrasi" method="POST">
                <?php echo csrf_field(); ?>
               <br>
                <input type="text" name="username" placeholder="Username" style="border-color: black "><br>
                <br>
                <input type="password" placeholder="Password" name="password"><br>
                <button style="border-color:#FF8C00; margin-bottom: 10px;" type="submit">Registration</button>
                <p>Already have an account? <a href="login">login here</a></p>
            </form>
        </div>
    </body>
</html><?php /**PATH E:\LARAVEL\kelompok-03\resources\views/registrasi.blade.php ENDPATH**/ ?>