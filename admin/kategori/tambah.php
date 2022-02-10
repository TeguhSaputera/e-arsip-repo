<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Kategori</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Kategori / Tambah</li>
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
                                <strong class="card-title text-left">Input Kategori</strong>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="kategori">Nama Kategori</label>
                                        <input type="text" name="kategori" id="kategori" class="form-control">
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
            $kategori = $_POST['kategori'];

            $sql = mysqli_query($koneksi, "INSERT INTO tb_kategori VALUES ('', '$kategori')");

            if ($sql){
                ?>
                <script type="text/javascript">
                    window.location.href="?page=kategori&aksi=sukses";
                </script>
                <?php
            }
        }
        
        ?>