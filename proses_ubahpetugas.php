<?php

    if($_POST){

        $id_petugas=$_POST['id_petugas'];

        $nama_petugas=$_POST['nama_petugas'];

        $username_petugas=$_POST['username_petugas'];

        $password_petugas=$_POST['password_petugas'];

        $level_petugas=$_POST['level_petugas'];


        if(empty($nama_petugas)){

            echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambahpetugas.php';</script>";


        } elseif(empty($username_petugas)){

            echo "<script>alert('username tidak boleh kosong');location.href='tambahpetugas.php';</script>";

        } elseif(empty($password_petugas)){

            echo "<script>alert('password tidak boleh kosong');location.href='tambahpetugas.php';</script>";

        } elseif(empty($level_petugas)){
            
            echo "<script>alert('level tidak boleh kosong');location.href='tambahpetugas.php';</script>";

        } else {

            include "cekkoneksi.php";

                $update=mysqli_query($conn,"update petugas set nama_petugas='".
                $nama_petugas."', username='".$username_petugas."', password='".$password_petugas."' ,level='".$level_petugas."' WHERE id_petugas='".$id_petugas."'") or die(mysqli_error($conn));

                if($update){

                    echo "<script>alert('Sukses update petugas');location.href='tampilpetugas.php';</script>";

                } else {

                    echo "<script>alert('Gagal update petugas');location.href='ubahpetugas.php?id_petugas=".$id_petugas."';</script>";

                }

            }

        }


    ?>