<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Login PSB ALIF</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="api-tawk.to.js"></script>

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
    <main class="form-signin">
        <form action="functions.php" method="POST">
            <input type="hidden" name="type" value="login">
            <h1 class="h3 mb-3 fw-normal">Login PSB SMKN 35</h1>
            <hr>
            <img class="mb-4" src="https://smksedkijakarta.files.wordpress.com/2017/11/smkn-35-jakarta.png" alt="" width="120" height="120">

            <div align="left">
                <label for="email">E-Mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div><br>
            <div align="left">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div><br>
            <div align="right">
                <button class="w-100 btn btn-md btn-success" type="submit">Sign in</button>
            </div>
            <br>
            <div class="mb-3">
                <label>
                    Belum memiliki akun? <a href="signup.php" class="text-muted">Daftar sekarang.</a>
                </label>
            </div>
            <br>
            <p class="mt-5 mb-3 text-muted">&copy; Mochammad Alif Kurniawan BNSP 2021</p>
        </form>
    </main>
</body>
</html>
