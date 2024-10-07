<?php
require 'auth.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="dist/img/logo1.png" />
  <title>Apotek Salin Kasih</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body style="background-image: url('bg1.jpg'); background-size:1250px 600px; background-repeat: no-repeat;">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
      <link href="dist/css/style.css" rel="stylesheet" type="text/css" />

        <div class="container">
          <div class="row justify-content-center">
            <div style="margin-top:25px" class="col-lg-5">
              <div class="card shadow-lg border-5 rounded-lg mt-5">
                <div class="card-header">
                <img style="margin-top:-8px" class= "mx-auto d-block" src="dist/img/logo1.png" height="120"> 
                </div>
                <div class="card-body">

                  <!-- Alert jika salah username atau password -->
                  <?php if (isset($error)) : ?>
                    <div class="alert alert-danger" role="alert">
                      Username atau Password Salah
                    </div>
                  <?php endif; ?>

                  <!-- Form untuk Login -->
                  <form action="" method="POST">
                    <div class="form-group">
                      <label class="small mb-1" for="username">USERNAME</label>
                      <input class="form-control py-4" id="username" name="username" type="text" placeholder="Masukkan Username" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                      <label class="small mb-1" for="password">PASSWORD</label>
                      <input class="form-control py-4" id="password" name="password" type="password" placeholder="Masukkan Password" />
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"></div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">LOGIN</button>
                  </form>
                </div>
              </div>
              <div class="card-footer text-center">
              </div>
            </div>
          </div>
        </div>
    </div>
    </main>
  </div>
  </div>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

</body>

</html>