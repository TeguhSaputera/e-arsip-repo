<?php 

    session_start();

    if ($_SESSION['login'] != "login"){
        header("location:../login.php?login=masuk");
    }


    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    include_once "../koneksi/koneksi.php";

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
    <title>Dashboard | E-Arsip</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../image/hulu_sungai_tengah.png" type="image/gif">

    <link rel="stylesheet" href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">


    <link rel="stylesheet" href="../assets/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="home.php"><img src="../image/hulu_sungai_tengah.png" alt="Logo" width="30">&nbsp; E-Arsip</a>
                <a class="navbar-brand hidden" href="home.php"><img src="../image/hulu_sungai_tengah.png" alt="Logo"></a>
            </div>

            <?php 
            
            $page = $_GET['page'];

            ?>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php if($page == "dashboard") { ?> active <?php } ?>">
                        <a href="?page=dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Menu Utama</h3><!-- /.menu-title -->
                    <li class="<?php if($page == "tahun") { ?> active <?php } ?>">
                        <a href="?page=tahun"> <i class="menu-icon ti-calendar"></i>Tahun </a>
                    </li>
                    <li class="<?php if($page == "kategori") { ?> active <?php } ?>">
                        <a href="?page=kategori"> <i class="menu-icon ti-menu"></i>Kategori </a>
                    </li>
                    <li class="<?php if($page == "arsip") { ?> active <?php } ?>">
                        <a href="?page=arsip"> <i class="menu-icon ti-folder"></i>Arsip </a>
                    </li>

                    <h3 class="menu-title">Setting</h3><!-- /.menu-title -->
                    <li class="<?php if($page == "user") { ?> active <?php } ?>">
                        <a href="?page=user"> <i class="menu-icon ti-user"></i>User </a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle "  src="../image/foto_profil/<?= $_SESSION['foto']; ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="?page=user"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->


        <?php 
        
        $page = $_GET['page'];
        $aksi = $_GET['aksi'];

        if ($page == "tahun"){
            if ($aksi == ""){
                include "tahun/tahun.php";
            }

            if ($aksi == "sukses"){
                include "tahun/tahun.php";
            }

            if ($aksi == "warning"){
                include "tahun/tahun.php";
            }

            if ($aksi == "danger"){
                include "tahun/tahun.php";
            }

            if ($aksi == "tambah"){
                include "tahun/tambah.php";
            }

            if ($aksi == "edit"){
                include "tahun/edit.php";
            }

            if ($aksi == "hapus"){
                include "tahun/hapus.php";
            }
        }

        if ($page == "kategori"){
            if ($aksi == ""){
                include "kategori/kategori.php";
            }

            if ($aksi == "sukses"){
                include "kategori/kategori.php";
            }

            if ($aksi == "warning"){
                include "kategori/kategori.php";
            }

            if ($aksi == "danger"){
                include "kategori/kategori.php";
            }

            if ($aksi == "tambah"){
                include "kategori/tambah.php";
            }

            if ($aksi == "edit"){
                include "kategori/edit.php";
            }

            if ($aksi == "hapus"){
                include "kategori/hapus.php";
            }
        }

        if ($page == "arsip"){
            if ($aksi == ""){
                include "arsip/arsip.php";
            }

            if ($aksi == "sukses"){
                include "arsip/arsip.php";
            }

            if ($aksi == "danger"){
                include "arsip/arsip.php";
            }

            if ($aksi == "tambah"){
                include "arsip/tambah.php";
            }

            if ($aksi == "tampil"){
                include "arsip/tampil.php";
            }

            if ($aksi == "hapus"){
                include "arsip/hapus.php";
            }
        }

        if ($page == "user"){
            if ($aksi == ""){
                include "user/user.php";
            }

            if ($aksi == "edit"){
                include "user/edit.php";
            }
        }

        if ($page == "dashboard"){
            if ($aksi == ""){
                include "dashboard/dashboard.php";
            }

            if ($aksi == "detail"){
                include "dashboard/detail.php";
            }
        }
        
        ?>

        



        
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/assets/js/main.js"></script>
    
    <script src="../assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    
    <script src="../assets/assets/js/init-scripts/data-table/datatables-init.js"></script>
</body>

</html>

