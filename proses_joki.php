<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $game = $_POST['game'];
    $choice = $_POST['choice'];
    $layanan = $_POST['layanan'];
    $uid = $_POST['uid'];
    $password = $_POST['password'];
    $catatan = $_POST['catatan'];
    $payment = $_POST['payment'];
    $whatsapp = $_POST['whatsapp'];

    $sql = "INSERT INTO pesanan_joki (game, choice, layanan, uid, password, catatan, payment, whatsapp) 
            VALUES ('$game', '$choice', '$layanan', '$uid', '$password', '$catatan', '$payment', '$whatsapp')";

    if (mysqli_query($conn, $sql)) {
        echo "Pesanan berhasil! Silakan hubungi admin via WhatsApp untuk konfirmasi.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>