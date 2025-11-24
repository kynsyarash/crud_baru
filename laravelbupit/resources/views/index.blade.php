<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ATM Sederhana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .atm-card {
            margin-top: 100px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 atm-card text-center">
            <h1 class="mb-4">Selamat Datang di ATM Kami</h1>
            <p class="mb-4">Silakan pilih layanan di bawah ini</p>
            <a href="/login" class="btn btn-outline-primary btn-lg mb-2 w-100">Login</a>
            <a href="/registrasi" class="btn btn-outline-primary btn-lg mb-2 w-100">Register</a>
            <a href="/saldo" class="btn btn-outline-secondary btn-lg mb-2 w-100">Cek Saldo</a>
            <a href="tarik.php" class="btn btn-outline-success btn-lg w-100">Tarik Tunai</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
