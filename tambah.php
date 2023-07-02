<?php
include "fungsi.php";

if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambah atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>


<h1>Tambah Data</h1>
<form action="" method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama"><br>
    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas"><br>
    <label for=" sekolah">Sekolah</label>
    <input type="text" name="sekolah" id="sekolah"><br>
    <button type="submit" name="submit">Tambah</button>
</form>