<?php
// edit.php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$data = $query->fetch_array(MYSQLI_ASSOC);
?>

<h1>Edit Data Mahasiswa</h1>
<form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <label>NIM:</label><br>
    <input type="text" name="nim" value="<?php echo $data['nim']; ?>" required><br><br>

    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br><br>

    <label>Jenis Kelamin:</label><br>
    <select name="jenis_kelamin">
        <option value="L" <?php if ($data['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
        <option value="P" <?php if ($data['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
    </select><br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" required><?php echo $data['alamat']; ?></textarea><br><br>

    <button type="submit" name="update">Update Data</button>
    <a href="index.php">Batal</a>
</form>