<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/login.css">
    </head>

    <body>

        <div class="container">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="color:teal">
                {{ session('success') }}
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color:red">
                {{ session('loginError') }}
            </div>
            @endif

            <div class="login">
                <img src="assets/img/profile.jpg">
          <h1>Sign In</h1>
          </div>
            <form action="/login" method="post">
                @csrf
                <label></label><br>
                <input type="text" name="username" id="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" style="border-color: black " autofocus required value="{{ old('username') }}"><br>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label></label><br>
                <input type="password" placeholder="Password" name="password" id="password" class="form-control @error('username') is-invalid @enderror" required><br>
                <button type="submit">Login</button>
            </form>
            <br>
            <center>
            <small class="d-block text-center mt-3">Not Registered?<a href="/registrasi">Register Now!</a></small>
            </center>
        </div>
    </body>
</html>