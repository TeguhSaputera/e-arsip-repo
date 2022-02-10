<?php 

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id='$id'");
    $tampil = $sql->fetch_assoc();

?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Kategori</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Kategori / Edit</li>
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
                                <strong class="card-title text-left">Edit Kategori</strong>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="kategori">Nama Kategori</label>
                                        <input type="hidden" name="id" value="<?= $tampil['id'] ?>">
                                        <input type="text" name="kategori" id="kategori" value="<?= $tampil['kategori'] ?>" class="form-control">
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
            $id_kategori = $_POST['id'];
            $kategori = $_POST['kategori'];

            $sql = mysqli_query($koneksi, "UPDATE tb_kategori SET kategori='$kategori' WHERE id='$id_kategori'");

            if ($sql){
                ?>
                <script type="text/javascript">
                    window.location.href="?page=kategori&aksi=warning";
                </script>
                <?php
            }
        }
        
        ?>