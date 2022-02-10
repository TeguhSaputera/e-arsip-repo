<?php 

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'Nopember',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
    
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Arsip</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Arsip</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            

             <div class="animated fadeIn">

                

                <div class="row">

                <div class="col-12">
                    <?php 
                    
                        $aksi = $_GET['aksi'];

                        if ($aksi == "sukses"){
                    ?>
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                        <span class="badge badge-pill badge-success">Success</span> Data arsip berhasil di simpan !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php }
                        if ($aksi == "warning"){
                            ?>
                            <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-warning">Warning</span> Data arsip berhasil di edit !
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                       <?php } 
                       if ($aksi == "danger"){
                            ?>
                            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                <span class="badge badge-pill badge-danger">Danger</span> Data arsip berhasil di hapus !
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php } ?>
                </div>

                    

                    <div class="col-md-12">
                        <a href="?page=arsip&aksi=tambah" class=" btn btn-outline-primary btn-sm mb-3">Tambah Data <i class="fa fa-plus"></i></a>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title text-left">Data Arsip</strong>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Ketegori</th>
                                            <th>Tanggal</th>
                                            <th>Nama Arsip</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_arsip");
                                        while ($item = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $item['kategori'] ?></td>
                                            <td><?= tgl_indo($item['tgl_arsip'], 'Y-m-d') ?></td>
                                            <td><?= $item['nama_arsip'] ?></td>
                                            <td><?= $item['file'] ?> &nbsp; &nbsp;<i class="fa fa-file-text text-danger fa-2x"></i></td>
                                            <td><a href="?page=arsip&aksi=tampil&id=<?= $item['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="?page=arsip&aksi=hapus&id=<?= $item['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        
        </div> <!-- .content -->