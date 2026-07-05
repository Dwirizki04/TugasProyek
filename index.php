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
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    $row = mysqli_fetch_array($data);
    if ($row) {
        while ($row) {
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
        echo "<tr><td colspan='5'>Belum ada data.</td></tr>";
    }
    ?>
</table>