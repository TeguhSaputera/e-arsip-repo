<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            

             <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <form method="post">
                            <div class="form-inline mb-3">
                                <input type="text" name="cari_tahun" id="cariTahun" placeholder="Cari Tahun" class="form-control mr-sm-2">
                                <button type="submit" name="cari" class="btn btn-primary">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>

                <?php 
                
                    $cari_tahun = $_POST['cari_tahun'];

                    if (isset($_POST['cari'])){
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_tahun WHERE tahun LIKE '%$cari_tahun%' LIMIT 2");
                        while ($data = mysqli_fetch_array($sql)){
                            ?>
                            <div class="row">
                    
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Januari&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-success border-success"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Januari</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Februari&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-primary border-primary"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Februari</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Maret&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-warning border-warning"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Maret</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=April&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-danger border-danger"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">April</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Mei&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-success border-success"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Mei</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Juni&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-primary border-primary"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Juni</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Juli&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-warning border-warning"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Juli</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Agustus&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-danger border-danger"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Agustus</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=September&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-success border-success"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">September</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Oktober&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-primary border-primary"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Oktober</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Nopember&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-warning border-warning"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Nopember</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Desember&tahun=<?= $data['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-danger border-danger"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Desember</div>
                                                        <div class="stat-digit"><?= $data['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>



                            </div>
                            <?php
                        }
                    }else{
                        $sql2 = mysqli_query($koneksi, "SELECT * FROM tb_tahun ORDER BY tahun DESC LIMIT 2");
                        while ($data2 = mysqli_fetch_array($sql2)){
                        ?>
                            <div class="row">
                    
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Januari&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-success border-success"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Januari</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Februari&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-primary border-primary"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Februari</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Maret&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-warning border-warning"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Maret</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=April&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-danger border-danger"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">April</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Mei&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-success border-success"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Mei</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Juni&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-primary border-primary"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Juni</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Juli&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-warning border-warning"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Juli</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Agustus&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-danger border-danger"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Agustus</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=September&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-success border-success"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">September</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Oktober&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-primary border-primary"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Oktober</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Nopember&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-warning border-warning"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Nopember</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <a href="?page=dashboard&aksi=detail&bulan=Desember&tahun=<?= $data2['tahun'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-files text-danger border-danger"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Desember</div>
                                                        <div class="stat-digit"><?= $data2['tahun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <hr>
                        <?php
                        }
                    }
                
                ?>

                
            </div><!-- .animated -->
        
        </div> <!-- .content -->