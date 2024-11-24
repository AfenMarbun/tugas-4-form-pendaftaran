<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();

    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $reservationType = trim($_POST['reservationType']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);
    $guestCount = intval($_POST['guestCount']);
    $terms = isset($_POST['terms']) ? true : false;
    $specialRequest = $_FILES['specialRequest'];

    $errors = [];

    if (empty($name)) $errors[] = "Nama tidak boleh kosong.";
    if (empty($phone)) $errors[] = "Nomor telepon tidak boleh kosong.";
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email tidak valid.";
    if (empty($reservationType)) $errors[] = "Jenis reservasi harus dipilih.";
    if (empty($date)) $errors[] = "Tanggal harus diisi.";
    if (empty($time)) $errors[] = "Waktu harus diisi.";
    if ($guestCount <= 0) $errors[] = "Jumlah orang harus lebih dari 0.";
    if (!$terms) $errors[] = "Anda harus menyetujui syarat dan ketentuan.";

    if ($specialRequest['error'] !== UPLOAD_ERR_OK) $errors[] = "Permintaan khusus harus diunggah.";
    if (pathinfo($specialRequest['name'], PATHINFO_EXTENSION) !== 'txt') $errors[] = "Hanya file .txt yang diperbolehkan.";
    if ($specialRequest['size'] > 2 * 1024 * 1024) $errors[] = "Ukuran file maksimal 2MB.";

    if (empty($errors)) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $uploadedFilePath = $uploadDir . basename($specialRequest['name']);
        move_uploaded_file($specialRequest['tmp_name'], $uploadedFilePath);

        $_SESSION['data'] = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'reservationType' => $reservationType,
            'date' => $date,
            'time' => $time,
            'guestCount' => $guestCount,
            'specialRequestPath' => $uploadedFilePath,
        ];

        header('Location: result.php');
        exit;
    } else {
        echo "<h3>Kesalahan:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='form.php'>Kembali ke Formulir</a>";
        exit;
    }
}
?>
