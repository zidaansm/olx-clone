<?php

// Konfigurasi Database (Sesuaikan dengan setup Laragon kamu)
$host = 'localhost';
$dbname = 'olx_clone'; // Pastikan nama database kamu sama persis (olx_clone atau olx-clone)
$username = 'root';
$password = '';

try {
    // Set DSN (Data Source Name)
    $dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=utf8mb4";
    
    // Membuat instance PDO baru
    $pdo = new PDO($dsn, $username, $password);
    
    // Set mode error PDO ke Exception agar mudah di-debug
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set default mode penarikan data ke Associative Array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // Mencegah emulasi prepared statements agar lebih aman dari SQL Injection
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
} catch(PDOException $e) {
    // Jika koneksi gagal, hentikan script dan tampilkan pesan error
    die("Koneksi database gagal: " . $e->getMessage());
}

?>
