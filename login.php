<?php 

    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    include_once "koneksi/koneksi.php";

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | E-Arsip</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="image/hulu_sungai_tengah.png" type="image/gif">


    <link rel="stylesheet" href="assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="login.php">
                        <img class="align-content" src="image/hulu_sungai_tengah.png" width="80px" alt="">
                        <h4 class="text-white mt-3">E-Arsip Kelurahan Pantai Hambawang Barat</h4>
                    </a>
                </div>
                 <?php 
                
                $login = $_GET['login'];

                if ($login == 'gagal'){
                ?>
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        Maaf, Anda Gagal Login
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <?php }elseif ($login == "masuk"){
                 ?> 
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        Anda Harus Login
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                 <?php } ?>

                <div class="login-form">
                    <form method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                        </div>
                                
                                <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>
                                
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/assets/js/main.js"></script>
</body>

</html>

<?php 

    if (isset($_POST['login'])){
        
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE user='$user' AND pass='$pass'");

        $ketemu = $login->num_rows;

        $data = $login->fetch_assoc();

        if ($ketemu >= 1){
            session_start();
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['foto'] = $data['foto'];
            $_SESSION['login'] = "login";

            header("location:admin/home.php?page=dashboard");
        }else{
            header("location:login.php?login=gagal");
        }
    }

?>
