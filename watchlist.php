<?php
session_start(); // Oturum verilerini kullanabilmek için oturumu başlatıyoruz
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Blue Screen</title>
  <link rel="icon" type="image/x-icon" sizes="167x167" href="BlueScreenLogo4.png">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/2p3W4w6J7X7d5R4t5n5T5l6Yz0R7m5Q6Xj+3Nz" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
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

  <footer class="footer">

    <div class="footer-content">
      <p class="footer-message">BlueScreen will always be with you from the moment you
        escape from the hustle and bustle of your daily life and
        step into the land of dreamland. We wish you a good time.</p>

      <div class="footer-social-media">
        <a href="https://x.com/fatmanurgncdgn"><img class="Twitter-icon" src="css/images/twitter.png"></a>
        <a href="https://www.instagram.com/fnurgncdgn"><img class="Instagram-icon" src="css/images/instagram.png"></a>
        <a href="https://www.linkedin.com/in/fatma-nur-gen%C3%A7do%C4%9Fan-876a002a7/"><img class="LinkedIn-icon" src="css/images/linkedin.png"></a>
        <a href="mailto:fgencdogan@gmail.com"><img class="Gmail-icon" src="css/images/gmail.png"></a>
      </div>

      <h1 class="keep-watching">KEEP WATCHING..</h1>
      <h2 class="owner">Website by</h2>
      <h3 class="name">Fatma Nur Gençdoğan</h3>

    </div>

  </footer>

  <script src="css/series.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-o2E8t0cP1+wC06K1WjML58b9W8jPvEjGmW/i+T7gT7/qe26QiTVAc6gvUzD1A5r9"
    crossorigin="anonymous"></script>

</body>

</html>