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

    <link rel="stylesheet" href="css/navbar.css">

</head>

<body>

    <nav class="navbar">
        <a href="index.php"><img class="BSlogo" src="css/images/BlueScreenLogo.png"></a>

        <div class="nav-title">
            <a class="nav-link" href="movies.php">Movies</a>
            <a class="nav-link" href="series.php">Series</a>
            <a class="nav-link" href="watchlist.php">Your Watchlist</a>
        </div>

        <div class="search-container">
            <input type="text" id="search-input" placeholder="Look for something to watch..." />
            <button class="search-button" onclick="search()">Search</button>
        </div>

        <div class="profile">
            <?php if (isset($_SESSION['username'])): ?>
                <!-- Eğer kullanıcı giriş yapmışsa Profil ve Çıkış Yap göster -->
                <a href="profile.php">Profil</a>
                <a href="logout.php">Çıkış Yap</a>
            <?php else: ?>
                <!-- Giriş yapılmamışsa Log In / Sign Up göster -->
                <a href="login.php">Log In</a>
                <a href="signup.php">Sign Up</a>
            <?php endif; ?>
        </div>
    </nav>

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