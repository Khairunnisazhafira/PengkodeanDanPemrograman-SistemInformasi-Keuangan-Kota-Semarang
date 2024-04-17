<?php 
    include('koneksi.php');
    $id_kas = $_GET['id_kas'];
    $query = mysqli_query($koneksi,"DELETE FROM kas WHERE id_kas = $id_kas ");
    
    if ($query) {
        header("location:kas.php"); 
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

?>