<?php

if($_POST){

    $id_pelanggan=$_POST['id_pelanggan'];

    $nama_pelanggan=$_POST['nama_pelanggan'];

    $alamat_pelanggan=$_POST['alamat_pelanggan'];

    $notelp_pelanggan=$_POST['notelp_pelanggan'];

    if(empty($id_pelanggan)){

        echo "<script>alert('id pelanggan tidak boleh kosong');location.href='tambahpelanggan.php';</script>";


    } elseif(empty($nama_pelanggan)){

        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambahpelanggan.php';</script>";

    } else {

        include "cekkoneksi.php";


            $update=mysqli_query($conn,"update pelanggan set nama ='".$nama_pelanggan."',alamat ='".$alamat_pelanggan."', telp ='".$notelp_pelanggan."' where id_pelanggan = '".$id_pelanggan."'") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update pelanggan');location.href='tampilpelanggan.php';</script>";

            } else {

                echo "<script>alert('Gagal update pelanggan');location.href='ubahpelanggan.php?id_siswa=".$id_pelanggan."';</script>";

            }

        }

       

    }



?>