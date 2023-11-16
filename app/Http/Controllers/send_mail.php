<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai dari formulir AJAX
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Lakukan sesuatu dengan data formulir, misalnya simpan ke database atau kirim email
    // Di sini, kita hanya mencetak data sebagai contoh
    echo 'Form submitted successfully!';

} else {
    // Jika formulir tidak disubmit melalui metode POST, kembalikan pesan kesalahan
    echo 'Error: Form not submitted';
}
?>
