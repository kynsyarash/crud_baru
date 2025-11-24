<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#082a4c;">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <h1 class="text-white text-center mb-4">Registrasi Akun</h1>
        <div class="p-5 bg-white rounded shadow" style="width: 600px;">
            <form method="POST" action="{{ url('/registrasi') }}">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="col-md-6">
                        <label for="rekening" class="form-label">Rekening:</label>
                        <input type="text" class="form-control" name="rekening" id="rekening" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pin" class="form-label">PIN (4 angka):</label>
                        <input type="text" class="form-control" name="pin" id="pin" maxlength="4" required>
                    </div>
                </div>
                <button class="btn btn-primary w-100 mt-4" type="submit" name="submit">Daftar!</button>
                <button class="btn btn-secondary w-100 mt-2" type="button" onclick="window.location.href='{{ url('/') }}'">Logout</button>
            </form>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="/login">Klik di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>