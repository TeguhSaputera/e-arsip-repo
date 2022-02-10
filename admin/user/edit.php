<?php 

    $id_user = $_GET['id'];

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id_user'");

    $tampil = $sql->fetch_assoc();

?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Profile</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Profile / Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            

             <div class="animated fadeIn">

                

                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title text-left">Edit Profile</strong>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="hidden" name="id" value="<?= $tampil['id_user'] ?>">
                                        <input type="text" name="nama" id="nama" value="<?= $tampil['nama'] ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="user">Username</label>
                                        <input type="text" name="user" id="user" value="<?= $tampil['user'] ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="pass">Password</label>
                                        <input type="text" name="pass" id="pass" value="<?= $tampil['pass'] ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="file">Foto Profil</label><br>
                                        <img src="../image/foto_profil/<?= $tampil['foto']  ?>" width="100px" class="img-thumbnail mb-2" alt="">
                                        <input type="file" name="foto" id="file" class="form-control">
                                        <?php 
                                            $gagal_pdf = $_GET['form'];

                                            if ($gagal_pdf == "gagal_pdf"){
                                        ?>
                                        <small class="text-danger">Format file tidak sesuai dengan pdf</small>
                                        <?php } ?>
                                    </div>

                                    <button type="submit" name="simpan" class="btn btn-success btn-sm">Simpan <i class="fa fa-save"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div> <!-- .content -->

        <?php 
        
        if (isset($_POST['simpan'])){
            $foto_lama = $tampil['foto'];
            $id = $_POST['id'];
            $nama_user = $_POST['nama'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $nama = $_FILES['foto']['name'];
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['foto']['tmp_name'];

            if(!empty($file_tmp)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if (file_exists("../image/foto_profil/$foto_lama")){
                        unlink("../image/foto_profil/$foto_lama");
                    }
                move_uploaded_file($file_tmp, '../image/foto_profil/' .$nama);
                $sql = mysqli_query($koneksi, "UPDATE tb_user SET nama='$nama_user', user='$user',
                pass='$pass', foto='$nama' WHERE id_user='$id'");

            if ($sql){
                ?>
                <script type="text/javascript">
                    window.location.href="?page=user";
                </script>
                <?php
                }
            }else{
                ?>
                <script type="text/javascript">
                    window.location.href="?page=arsip&aksi=tambah&form=gagal_pdf";
                </script>
                <?php
                }
            }else{
                $sql2 = mysqli_query($koneksi, "UPDATE tb_user SET nama='$nama_user', user='$user',
                pass='$pass' WHERE id_user='$id'");

                if ($sql2){
                ?>
                <script type="text/javascript">
                    window.location.href="?page=user";
                </script>
                <?php
                }
            }
            
            
        }
        
        ?>