<?php 
    if($_GET['id_pelanggan']){
        include "koneksii.php";
        $qry_hapuss_pelanggan=mysqli_query($conn,"delete from pelanggan where id_pelanggan='".$_GET['id_pelanggan']."'");
        if($qry_hapuss_pelanggan){
            echo "<script>alert('Sukses hapus pelanggan');location.href='tampil_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus pelanggan');location.href='tampil_pelanggan.php';</script>";
        }
    }
?>