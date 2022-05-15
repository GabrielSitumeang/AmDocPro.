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
                @csrf
               <br>
                <input type="text" class="form-control rounded-top @error('username')is-invalid @enderror" name="username" id="username" placeholder="Username" style="border-color: black " required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div><br>
                @enderror
                <br>
                <input type="password" id="password" placeholder="Password" name="password" class="form-control rounded-top @error('password')is-invalid @enderror" ><br>
                @error('password')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div><br>
                @enderror
                <button style="border-color:#FF8C00; margin-bottom: 10px;" type="submit">Registration</button>
                <p>Already have an account? <a href="/login">login here</a></p>
            </form>
        </div>
    </body>
</html>