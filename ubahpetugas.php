<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "cekkoneksi.php";

    $qry_get_petugas=mysqli_query($conn,"select * from petugas where id_petugas =  '".$_GET['id_petugas']."'");

    $dt_petugas=mysqli_fetch_array($qry_get_petugas);

    ?>

    <h3>Ubah Petugas</h3>

    <form action="proses_ubahpetugas.php" method="post">

        ID Petugas :

        <input type="number" name="id_petugas" value=   "<?=$dt_petugas['id_petugas']?>" class="form-control">

        Nama :

        <input type="text" name="nama_petugas" value=   "<?=$dt_petugas['nama_petugas']?>" class="form-control">

        Username :

        <input type="text" name="username_petugas" value=   "<?=$dt_petugas['username']?>" class="form-control">

        Password :

        <input type="password" name="password_petugas" value="" class="form-control">

        Level :

        <input type="number" name="level_petugas" value=   "<?=$dt_petugas['level']?>" class="form-control">

        

<input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>