<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav me-auto">
      
    </div>
    <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
    <a href="register.php" class="btn btn-outline-success m-1">masuk</a>
  </div>
</nav>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Login Aplikasi</h5>
                    </div>
                    <form action="" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit" name="kirim"> Maasuk</button>
                        </div>
                    </form>
                    <hr>
                    <p>belum punya akun? <a href="login.php">login di sini!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
  <p>&copy; UKK RPL 2024 | YOGA</p>
</footer>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>