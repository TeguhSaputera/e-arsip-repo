<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            

             <div class="animated fadeIn">

                <div class="row">

                    <?php 
                    
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_user");
                        while ($data = mysqli_fetch_array($sql)){
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Data Profil</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="../image/foto_profil/<?= $data['foto'] ?>" width="200px" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $data['nama']?></h5>
                                    <div class="row justify-content-center">
                                        <table width="100%" style="margin: 20px">
                                            <tr>
                                                <th width="30%">Username</th>
                                                <td>:</td>
                                                <td><?= $data['user'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Password</th>
                                                <td>:</td>
                                                <td><?= $data['pass'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="?page=user&aksi=edit&id=<?= $data['id_user'] ?>" class="btn btn-warning btn-sm btn-block text-white">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div><!-- .animated -->
        
        </div> <!-- .content -->