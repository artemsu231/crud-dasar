<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama = $data["nama"];
    $kelas = $data["kelas"];
    $sekolah = $data["sekolah"];
    $query = "INSERT INTO data_diri VALUES
        ('','$nama','$kelas','$sekolah')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $kelas = $data["kelas"];
    $sekolah = $data["sekolah"];
    $query = "UPDATE data_diri SET
            nama='$nama',
            kelas='$kelas',
            sekolah='$sekolah'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_diri WHERE id = $id");

    return mysqli_affected_rows($conn);
}
