<!DOCTYPE html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body style="background-color:#082a4c;">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100 ">
            <h1 class="text-white" style="text-align: center; font-family:'arial'">LOGIN</h1>
            <div class="login-box p-4 bg-white rounded shadow" style="width: 400px; height:300px;">
            <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="nama">Username : </label><br>
                <input type="text" class="form-control" name="nama" placeholder="username">
            </div>
            <div class="mb-3">
                <label for="password">password : </label><br>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
    
                <button class="btn btn-primary w-100" type="submit" class="form-control" name="submit">LOGIN!</button>
            </form>
            <button class="btn btn-outline-secondary w-100 mt-2" type="button"><a href="/">LOGOUT! </a></button>
            </form>
            <br>
            Belum punya akun? daftar <a href="/registrasi">di sni </a>
        </div>
    </body>
</html>