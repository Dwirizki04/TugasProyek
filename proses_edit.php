<?php
// proses_edit.php
include 'koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // Query untuk update data
    $query = "UPDATE mahasiswa SET 
                nim='$nim', 
                nama='$nama', 
                jenis_kelamin='$jk', 
                alamat='$alamat' 
              WHERE id='$id'";

    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
}
