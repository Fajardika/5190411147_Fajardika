<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <style>
        .card-header{ background-color: var(--bs-cyan); }
        .btn{ background-color: var(--bs-cyan);  }
        .btn:hover {background-color: var(--bs-cyan);  opacity: 0.8; }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header text-center text-white"><h5 class="card-title fw-bold">Form Register</h5></div>
                    <div class="card-body">
                    <form action="/simpanuser" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="" class="form-label">Nama Pengguna</label>
                          <input type="text" required autofocus autocomplete="off" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" required autocomplete="off" class="form-control" id="email" name="email" placeholder="Masukan Email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" required autocomplete="off" class="form-control" id="password" name="password" placeholder="Masukan Password">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input name="" id="" class="form-control mt-2 mb-2 btn btn-sm btn-circle btn-primary" type="submit" value="Sign Up">
                        <small>Sudah memiliki akun? Silahkan <a href="/">login</a> sekarang</small>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
