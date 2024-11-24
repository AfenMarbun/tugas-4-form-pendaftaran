<?php
session_start();
if (!isset($_SESSION['data'])) {
    header('Location: form.php');
    exit;
}

$data = $_SESSION['data'];
$uploadedFilePath = isset($data['specialRequestPath']) ? $data['specialRequestPath'] : null;
$fileContent = '';

if ($uploadedFilePath && file_exists($uploadedFilePath)) {
    $fileContent = file_get_contents($uploadedFilePath);
} else {
    $fileContent = 'File tidak ditemukan atau belum diunggah.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Reservasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Hasil Reservasi</h1>
        <table class="table table-bordered">
            <tr>
                <th>Nama Lengkap</th>
                <td><?= htmlspecialchars($data['name']) ?></td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td><?= htmlspecialchars($data['phone']) ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($data['email'] ?: 'Tidak diisi') ?></td>
            </tr>
            <tr>
                <th>Jenis Reservasi</th>
                <td><?= htmlspecialchars($data['reservationType']) ?></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?= htmlspecialchars($data['date']) ?></td>
            </tr>
            <tr>
                <th>Waktu</th>
                <td><?= htmlspecialchars($data['time']) ?></td>
            </tr>
            <tr>
                <th>Jumlah Orang</th>
                <td><?= htmlspecialchars($data['guestCount']) ?></td>
            </tr>
            <tr>
                <th>Isi Permintaan Khusus</th>
                <td>
                    <pre><?= htmlspecialchars($fileContent) ?></pre>
                </td>
            </tr>
        </table>
        <div class="text-center">
            <a href="form.php" class="btn btn-primary">Kembali ke Formulir</a>
        </div>
    </div>
</body>
</html>
