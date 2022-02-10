<?php 

    $id_tahun = $_GET['id'];

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_tahun WHERE id='$id_tahun'");
    $tampil = $sql->fetch_assoc();

?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Tahun</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Tahun / Edit</li>
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
                                <strong class="card-title text-left">Edit Tahun</strong>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="hidden" name="id" value="<?= $tampil['id'] ?>">
                                        <input type="text" name="tahun" id="tahun" value="<?= $tampil['tahun'] ?>" class="form-control">
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
            $id = $_POST['id'];
            $tahun = $_POST['tahun'];

            $sql = mysqli_query($koneksi, "UPDATE tb_tahun SET tahun='$tahun' WHERE id='$id'");

            if ($sql){
                ?>
                <script type="text/javascript">
                    window.location.href="?page=tahun&aksi=warning";
                </script>
                <?php
            }
        }
        
        ?>