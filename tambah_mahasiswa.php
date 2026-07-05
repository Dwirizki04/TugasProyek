<h1>Tambah Mahasiswa</h1>
<form action="proses_tambah.php" method="POST">
    <p><label>NIM:</label><br>
        <input type="text" name="nim" required>
    </p>

    <p><label>Nama:</label><br>
        <input type="text" name="nama" required>
    </p>

    <p><label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </p>

    <p><label>Alamat:</label><br>
        <textarea name="alamat" required></textarea>
    </p>

    <button type="submit" name="simpan">Simpan</button> <button type="reset" name="reset">Batal</button> <br>
    <a href="javascript:history.go(-1);">&lt; Kembali</a>
</form>