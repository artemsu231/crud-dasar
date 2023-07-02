<?php
include "fungsi.php";
$hasil = query("SELECT * FROM data_diri");
?>

<h1>DATA SISWA SMK</h1>

<a href="tambah.php">Tambah Data</a><br><br>

<table border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Sekolah</td>
        <td>Aksi</td>
    </tr>
    <?php
    $i = 1;
    foreach ($hasil as $baris) :
    ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?php echo $baris['nama']; ?></td>
            <td><?php echo $baris['kelas']; ?></td>
            <td><?php echo $baris['sekolah']; ?></td>
            <td>
                <a href="ubah.php?id=<?= $baris["id"] ?>">ubah</a> |
                <a href="hapus.php?id=<?= $baris["id"] ?>">hapus</a>
            </td>
        </tr>
    <?php
        $i++;
    endforeach ?>
</table>