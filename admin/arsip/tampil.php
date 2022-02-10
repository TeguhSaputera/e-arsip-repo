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


    $id = mysqli_real_escape_string($koneksi, $_GET['id']);


    $sql = mysqli_query($koneksi, "SELECT * FROM tb_arsip WHERE id='$id'");
    $tampil = $sql->fetch_assoc();

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
                            <li class="active">Arsip / Tampil</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            

             <div class="animated fadeIn">

                

                <div class="row">

                    <div class="col-md-12">
                        <a href="?page=arsip" class=" btn btn-outline-warning btn-sm mb-3">Kembali</a>
                        <a href="?page=dashboard" class=" btn btn-outline-info btn-sm mb-3">Kembali ke Dashboard</a>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title text-left">Data Arsip</strong>
                            </div>
                            
                                <div class="card-body">
                                    <table width="100%">
                                        <tr>
                                            <th width="20%">Nama Kategori</th>
                                            <td>:</td>
                                            <td><?= $tampil['kategori'] ?></td>

                                            <th width="30%">Tanggal Arsip</th>
                                            <td>:</td>
                                            <td><?= tgl_indo($tampil['tgl_arsip'], 'Y-m-d') ?></td>
                                        </tr>
                                        <tr>
                                            <th width="20%">Tahun</th>
                                            <td>:</td>
                                            <td><?= $tampil['tahun'] ?></td>

                                            <th width="30%">Nama Arsip</th>
                                            <td>:</td>
                                            <td><?= $tampil['nama_arsip'] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="20%">Bulan</th>
                                            <td>:</td>
                                            <td><?= $tampil['bulan'] ?></td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <embed src="../file_pdf/<?php echo $tampil['file'] ?>" type="application/pdf" width="90%" height="700">
</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        
        </div> <!-- .content -->