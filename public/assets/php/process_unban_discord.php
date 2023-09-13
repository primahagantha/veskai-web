<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $reason = $_POST['reason'];

    $from = 'discord-unban@veskai.com'; // Ganti dengan alamat email pengirim
    $to = 'admin@veskai.com'; // Ganti dengan alamat email admin atau penerima permintaan unban
    $subject = 'Unban Request';
    $message = "Username: $username\nReason: $reason";

    // Header untuk email
    $headers = "From: $from" . "\r\n" .
               "Reply-To: $from" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Kirim email
    $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        echo "Unban request for user $username has been submitted. We will review your request.";
    } else {
        echo "Failed to submit unban request. Please try again later.";
    }
}
?>
