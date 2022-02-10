<?php 

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE FROM tb_tahun WHERE id='$id'");
    
    if ($sql){
?>
    <script type="text/javascript">
        window.location.href="?page=tahun&aksi=danger";
    </script>
    <?php } ?>