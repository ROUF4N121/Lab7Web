<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri dan Pekerjaan</title>
</head>
<body>

<h2>Form Data Diri</h2>

<form method="POST" action="">
    Nama:<br>
    <input type="text" name="nama" required><br><br>

    Tanggal Lahir:<br>
    <input type="date" name="tanggal_lahir" required><br><br>

    Pekerjaan:<br>
    <select name="pekerjaan" required>
        <option value="">-- Pilih Pekerjaan --</option>
        <option value="Programmer">Programmer</option>
        <option value="Montir">Montir</option>
        <option value="Guru">Guru</option>
        <option value="Dokter">Dokter</option>
        <option value="Pegawai">Pegawai Kantoran</option>
    </select><br><br>

    <input type="submit" name="submit" value="Tampilkan Data">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $lahir = new DateTime($tanggal_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($lahir)->y;

    switch ($pekerjaan) {
        case "Programmer":
            $gaji = 10000000;
            break;
        case "Montir":
            $gaji = 8000000;
            break;
        case "Guru":
            $gaji = 6000000;
            break;
        case "Dokter":
            $gaji = 15000000;
            break;
        case "Pegawai":
            $gaji = 7000000;
            break;
        default:
            $gaji = 0;
    }

    echo "<hr>";
    echo "<h3>Hasil Data Diri</h3>";
    echo "Nama: $nama <br>";
    echo "Tanggal Lahir: $tanggal_lahir <br>";
    echo "Umur: $umur tahun <br>";
    echo "Pekerjaan: $pekerjaan <br>";
    echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
}
?>

</body>
</html>
