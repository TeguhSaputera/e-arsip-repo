<?php 

$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$sql = mysqli_query($koneksi, "SELECT * FROM tb_arsip WHERE id='$id'");

$data = $sql->fetch_assoc();

$file = $data['file'];

if (file_exists("../file_pdf/$file")){
    unlink("../file_pdf/$file");
}

$sql2 = mysqli_query($koneksi, "DELETE FROM tb_arsip WHERE id='$id'");

if ($sql2){
    ?>
    <script type="text/javascript">
        window.location.href="?page=arsip&aksi=danger";
    </script>
    <?php } ?>