<?php 
include 'koneksi.php';

$data_pembayaran = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM pemesanan WHERE id "));

if (isset($_POST['btnSimpan'])) {
    $status_pembayaran = $_POST['status_pembayaran'];
    $bayar = mysqli_query($connection, "UPDATE pemesanan SET status_pembayaran = '$status_pembayaran' WHERE id ");
    if ($bayar) {
        echo "
            <script>
                alert('Pembayaran berhasil diubah!')
                window.location.href='tampil.php
            </script>
        ";
        exit;
    } else {
        echo "
            <script>
                alert('Pembayaran gagal diubah!')
                window.location.href='tampil.php
            </script>
        ";
        exit;
    }
}


?>

<html>

<head>
    <title>Ubah Pembayaran Bulan <?= $data_pembayaran['bulan_pembayaran']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <h1>Ubah Pembayaran Bulan </h1>
        <form method="post" class="form-admin">
            <div class="form-group">
                <label for="status_pembayaran">Status Pembayaran</label>
                <select name="status_pembayaran" id="status_pembayaran" class="input">
                    <option value="<?= $data_pembayaran['status_pembayaran']; ?>"><?= $data_pembayaran['status_pembayaran']; ?></option>
                    <option value="Lunas">Lunas</option>
                    <option value="Belum">Belum</option>
                </select>
            </div>
            <button type="submit" class="btn" name="btnSimpan">Simpan</button>
        </form>
    </div>
</body>

</html>