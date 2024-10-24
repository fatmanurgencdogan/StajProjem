<?php
session_start();
session_unset(); // Oturumdaki tüm verileri sil
session_destroy(); // Oturumu tamamen sonlandır
header("Location: index.php"); // Ana sayfaya yönlendir
exit();
?>
