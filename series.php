<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <a href="#"><img class="BSlogo" src="css/images/BlueScreenLogo.png"></a>

    <div class="nav-title">
      <a class = "nav-link" href="movies.php">Movies</a>
      <a class = "nav-link" href="series.php">Series</a>
      <a class = "nav-link active" href="watchlist.php">Your Watchlist</a>
    </div>

    <div class="search-container">
      <input type="text" id="search-input" placeholder="Look for something to watch..." />
      <button class="search-button" onclick="search()">Search</button>
    </div>

    <div class="profile">
      <a href="login.php">Log In</a>
      <a href="signup.php">Sign Up</a>
    </div>

  </nav>

  <footer class="footer">

    <div class="footer-content">
      <p class="footer-message">BlueScreen will always be with you from the moment you
         escape from the hustle and bustle of your daily life and 
         step into the land of dreamland. We wish you a good time.</p>

      <div class="footer-social-media">
        <a href="#"><img class="Twitter-icon" src="css/images/twitter.png"></a>
        <a href="#"><img class="Instagram-icon" src="css/images/instagram.png"></a>
        <a href="#"><img class="LinkedIn-icon" src="css/images/linkedin.png"></a>
        <a href="#"><img class="Gmail-icon" src="css/images/gmail.png"></a>
      </div>

      <h1 class="keep-watching">KEEP WATCHING..</h1>
      <h2 class="owner">Website by</h2>
      <h3 class="name">Fatma Nur Gençdoğan</h3>    

    </div>

  </footer>

  
</body>

</html>
