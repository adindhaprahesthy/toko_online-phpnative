<?php 

    if($_POST){

        $username=$_POST['username'];

        $password=$_POST['password'];

        if(empty($username)){

            echo "<script>alert('Username tidak boleh kosong');location.href='login_pelanggan.php';</script>";

        } elseif(empty($password)){

            echo "<script>alert('Password tidak boleh kosong');location.href='login_pelanggan.php';</script>";

        } else {

            include "koneksii.php";

            $qry_login=mysqli_query($conn,"select * from siswa where username = '".$username."' and password = '".md5($password)."'");

            if(mysqli_num_rows($qry_login)>0){

                $dt_login=mysqli_fetch_array($qry_login);

                session_start();

                $_SESSION['id_siswa']=$dt_login_pelanggan['id_siswa'];

                $_SESSION['nama_siswa']=$dt_login_pelanggan['nama_siswa'];

                $_SESSION['status_login_pelanggan']=true;

                header("location: home.php");

            } else {

                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";

            }

        }

    }

?>