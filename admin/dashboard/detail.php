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
                        <h1>Detail Arsip</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard / Detail Arsip</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            

             <div class="animated fadeIn">

                

                <div class="row">
                    <?php 

                        $tahun = $_GET['tahun'];
                        $bulan = $_GET['bulan'];

                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_arsip WHERE tahun='$tahun' AND bulan='$bulan'");
                        while ($data = mysqli_fetch_array($sql)){

                    ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Detail Arsip</strong>
                            </div>
                            <div class="card-body">
                                Kategori : <?= $data['kategori'] ?><br>
                                Nama Arsip : <?= $data['nama_arsip'] ?>
                                Tanggal Arsip : <?= tgl_indo($data['tgl_arsip'], 'Y-m-d') ?>
                            </div>
                            <div class="card-footer">
                                <a href="?page=arsip&aksi=tampil&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm btn-block text-white">Download</a>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    
                </div>
            </div><!-- .animated -->
        </div> <!-- .content -->
