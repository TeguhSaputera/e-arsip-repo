<?php 

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id='$id'");
    
    if ($sql){
?>
    <script type="text/javascript">
        window.location.href="?page=kategori&aksi=danger";
    </script>
    <?php } ?>