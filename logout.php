<?php
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Kembali ke halaman login
header("Location: login.php");
exit;
?>