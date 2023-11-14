<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WonokitriTourism";

try {
    // Buat koneksi ke database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Atur mode error untuk PDO ke Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query SELECT
    $sql = "SELECT * FROM travel_packages WHERE id = ".$bookingData['travel_package_id'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Ambil hasil query
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Cek apakah data ditemukan
    if ($result) {
        // Lakukan sesuatu dengan data
        // echo "ID: " . $result['id'] . "<br>";
        // echo "Location: " . $result['location'] . "<br>";
        // ... (tambahkan kolom lainnya sesuai kebutuhan)
    } else {
        // Handle jika data tidak ditemukan
        echo "Travel package with ID 3 not found.";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Tutup koneksi
$conn = null;


?>


<!DOCTYPE html>
<html>
<head>
    <title>Booking Notification</title>
</head>
<body>
    <br>Halo Kak, {{ $bookingData['name'] }},</p>
    <br>Hong Ulun Basuki Langgeng.</p>

    <p>Berikut adalah detail pesanan Anda:
    <ul>
        <li>Kode Booking: {{ $bookingData['booking_code'] }}</li>
        <li>Tanggal Pesanan: {{ $bookingData['date'] }}</li>
        <li>Produk Paket Wisata: {{ $result['location'] }}</li>
        <li>Jumlah Orang: {{ $bookingData['quantity'] }}</li>
        <li>Harga: {{ number_format ($result['price']*$bookingData['quantity'],3 , '.', ',' ) }}</li>
    </ul>

    <br>Terima kasih telah melakukan pemesanan
    <br>Mohon konfirmasi pembayaran melalui form berikut

    <p>Salam Admin WonokitriTourism
</body>
</html>
