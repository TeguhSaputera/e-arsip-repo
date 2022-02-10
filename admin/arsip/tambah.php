<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Arsip</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Arsip / Tambah</li>
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
                                <strong class="card-title text-left">Input Arsip</strong>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" id="kategori" class="form-control">
                                            <option value="">== Pilih Kategori ==</option>
                                            <?php 
                                            $sql1 = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                                            while ($data1 = mysqli_fetch_array($sql1)){
                                            ?>
                                            <option value="<?= $data1['kategori'] ?>"><?= $data1['kategori'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <select name="tahun" id="tahun" class="form-control">
                                            <option value="">== Pilih Tahun ==</option>
                                            <?php 
                                            $sql2 = mysqli_query($koneksi, "SELECT * FROM tb_tahun");
                                            while ($data2 = mysqli_fetch_array($sql2)){
                                            ?>
                                            <option value="<?= $data2['tahun'] ?>"><?= $data2['tahun'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="bulan">Bulan</label>
                                        <select name="bulan" id="bulan" class="form-control">
                                            <option value="" selected>== Pilih Bulan ==</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="Nopember">Nopember</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="tglArsip">Tanggal Arsip</label>
                                        <input type="date" name="tgl_arsip" id="tglArsip" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="namaArsip">Nama Arsip</label>
                                        <input type="text" name="nama_arsip" id="namaArsip" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="file">File PDF</label>
                                        <input type="file" name="file_pdf" id="file" class="form-control">
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
            $kategori = $_POST['kategori'];
            $tahun = $_POST['tahun'];
            $bulan = $_POST['bulan'];
            $tgl_arsip = $_POST['tgl_arsip'];
            $nama_arsip = $_POST['nama_arsip'];
            $ekstensi_diperbolehkan = array('pdf');
            $nama = $_FILES['file_pdf']['name'];
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['file_pdf']['tmp_name'];
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                move_uploaded_file($file_tmp, '../file_pdf/' .$nama);
                $sql = mysqli_query($koneksi, "INSERT INTO tb_arsip VALUES ('', '$kategori', '$tahun', 
                '$bulan', '$tgl_arsip', '$nama_arsip', '$nama')");

            if ($sql){
                ?>
                <script type="text/javascript">
                    window.location.href="?page=arsip&aksi=sukses";
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
            
        }
        
        ?>