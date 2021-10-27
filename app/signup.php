<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Sign-Up PSB ALIF</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/auth.css" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signup">
        <form action="functions.php" method="POST" onsubmit="return formCheck();">
            <input type="hidden" name="type" value="signUp">
            <h1 class="h3 mb-3 fw-normal">Sign-Up Form PSB SMKN 35</h1>
            <hr>
            <div align="left" class="">
                <h5>Nama Lengkap</h5>
                <!-- <label for="nama">Nama Lengkap</label> -->
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
            </div><br>
            <div align="left" class="">
                <h5>NIK</h5>
                <!-- <label for="nik">No. Indentitas (NIK)</label> -->
                <input type="number" name="nik" class="form-control" id="nik" placeholder="No. Indentitas (NIK)" required>
            </div><br>
            <div align="left" class="">
                <h5>No. Telepon</h5>
                <!-- <label for="no_telepon">No. Telepon</label> -->
                <input type="number" name="no_telepon" class="form-control" id="no_telepon" placeholder="No. Telepon" required>
            </div><br>
            <div align="left" class="">
                <h5>E-Mail</h5>
                <!-- <label for="email">Email</label> -->
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div><br>
            <div align="left" class="">
                <h5>Password</h5>
                <!-- <label for="password">Password</label> -->
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div><br>
            <div align="left" class="">
                <h5>Ulangi Password</h5>
                <!-- <label for="password_conf">Ulangi Password</label> -->
                <input type="password" name="password_confirmation" class="form-control" id="password_conf" placeholder="Password" required>
            </div><br>
            <br>
            <div align="left" class="mb-3">
                <label>
                    Sudah memiliki akun? <a href="index.php" class="text-muted">Login!</a>
                </label>
            </div>
            <div align="right">
                <button class="w-100 btn btn-md btn-success" type="submit">Daftar</button>
            </div>
            <br>
            <p class="mt-5 mb-3 text-muted">&copy; Mochammad Alif Kurniawan BNSP 2021</p>
        </form>
    </main>

    <!-- Form check -->
    <script>
        function formCheck() {
            var nama = document.getElementById('nama');
            var nik = document.getElementById('nik');
            var pw = document.getElementById('password');
            var conf_pw = document.getElementById('password_conf');

            if (nama.value.length < 4) {
                alert('Nama minimal 4 karakter!');
                nama.focus();
                return false;
            } else if (nik.value.length < 3) {
                alert('NIK minimal 3 karakter!');
                nik.focus();
                return false;
            } else if (pw.value != conf_pw.value) {
                alert('Password tidak cocok!');
                conf_pw.focus();
                return false;
            } else if (pw.value.length < 6) {            
                alert('Password minimal 6 karakter!');
                pw.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>
</html>
