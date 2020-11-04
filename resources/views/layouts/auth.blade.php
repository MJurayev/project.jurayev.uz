<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 13.10.2020
 * Time: 10:40
 */
?>

        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="globalAssets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="globalAssets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="globalAssets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/clientAssets/css/loader.styles.css" >
</head>

<body class="login-bg">
<div id="loader1">
    <div id="loader-container">
        <p id="loadingText">Loading</p>
    </div>
</div>
<div class="contain">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-10 col-md-8">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6 ">
                            <div class="p-5">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="globalAssets/vendor/jquery/jquery.min.js"></script>
<script src="globalAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="globalAssets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="globalAssets/js/sb-admin-2.min.js"></script>

</body>
<script>
    $(document).ready(()=>{
        $('#loader1').fadeOut(1800);
    })
</script>
</html>
