<?php
session_start();

// Kullanıcı giriş yapmamışsa, giriş sayfasına yönlendir
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Örnek kullanıcı verileri (bu veriler genellikle bir veritabanından çekilir)
$userEmail = "example@example.com"; // Bu değeri veritabanından alabilirsin

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css"> <!-- Profil sayfası stili -->
    <title>Profile Page</title>
</head>

<body>
    <div class="profile-container">
        <h1>Welcome to Your Profile, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

        <div class="profile-info">
            <h2>Profile Information</h2>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
        </div>

        <div class="profile-actions">
            <a href="edit-profile.php">Edit Profile</a>
            <a href="logout.php">Log Out</a>
        </div>
    </div>

</body>

</html>
