<?php include 'koneksi.php'; ?>

<h1>Data Mahasiswa</h1>

<p><a href="tambah_mahasiswa.php">Tambah Data</a></p>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    if (count($rows) > 0) {
        foreach ($rows as $row) {
            echo "<tr>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['jenis_kelamin'] . "</td>
                <td>" . $row['alamat'] . "</td>
                <td>
                    <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
                    <a href='hapus.php?id=" . $row['id'] . "'>Hapus</a>
                </td>
            </tr>";
        }
    } else {
        "<tr><td colspan='5'>Data tidak ditemukan.</td></tr>";
    }
    ?>
</table>