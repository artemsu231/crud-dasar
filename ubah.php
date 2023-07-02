<?php
include "fungsi.php";
$id = $_GET['id'];
$data = query("SELECT * FROM data_diri WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    //cek apakah data berhasil diUbah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'index.php';
        </script>
    ";
    }
}
?>
<h1>Ubah Data</h1>
<form action="" method="post">

    <input type="hidden" name="id" id="id" value="<?= $data['id']; ?>">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" value="<?= $data['nama']; ?>"><br>
    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" value="<?= $data['kelas']; ?>"><br>
    <label for=" sekolah">Sekolah</label>
    <input type="text" name="sekolah" id="sekolah" value="<?= $data['sekolah']; ?>"><br>
    <button type="submit" name="submit">Ubah</button>
</form>