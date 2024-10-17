<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
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
    <a href="#"><img class="BSlogo" src="BlueScreenLogo.png"></a>

    <div class="nav-title">
      <a class = "nav-link" href="movies.php">Movies</a>
      <a class = "nav-link" href="series.php">Series</a>
      <a class = "nav-link" href="watchlist.php">Your Watchlist</a>
    </div>

    <div class="search-container">
      <input type="text" id="search-input" placeholder="Look for something to watch..." />
      <button class="search-button" onclick="search()">Search</button>
    </div>

    <div class="profile">
      <a href="login.php">Log In</a>
      <a href="registration.php">Sign Up</a>
    </div>

  </nav>

  <div class="slideshow-container">

    <div class="mySlides">
      <q>Sometimes it’s the smallest things that take up the most room in your heart.</q>
      <p class="author">- (Winnie the Pooh)</p>
    </div>

    <div class="mySlides">
      <q>After all, tomorrow is another day.</q>
      <p class="author">- (Gone with the Wind)</p>
    </div>

    <div class="mySlides">
      <q>I don't want to survive. I want to live.</q>
      <p class="author">- (The Hunger Games)</p>
    </div>

    <div class="mySlides">
      <q>Hope is a good thing, maybe the best of things, and no good thing ever dies.</q>
      <p class="author">- (The Shawshank Redemption)</p>
    </div>

    <div class="mySlides">
      <q>You don’t have to be a hero to save the world.</q>
      <p class="author">- (The Amazing Spider-Man)</p>
    </div>

    <div class="mySlides">
      <q>You have to see the world for what it is, not for what you want it to be.</q>
      <p class="author">- (The Pursuit of Happyness)</p>
    </div>

    <div class="mySlides">
      <q>This isn’t a game. This is a life.</q>
      <p class="author">- (12 Angry Men)</p>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>

  <div class="title-movies-container"></div> 
  <div class="home-movies-title">Popular Movies</div>
  
  <main id="main">
    <div class="movie">
      <div class="movie-info">
        <h3>Movie Title</h3>
        <span class="vote" data-vote="4.7">4.7</span>
      </div>
    </div>
  </main> 
<!--   
  <div class="title-series-container"></div> 
  <div class="home-series-title">Popular Series</div> -->

  <!-- <main id="series">
    <div class="series">
      <div class="series-info">
        <h3>Series Title</h3>
        <span class="vote" data-vote="4.5">4.5</span>
      </div>
    </div>
  </main> -->
  
  <!-- <main id="main">
    <div class="series">
      <div class="series-info">
        <h3>Serie Title</h3>
        <span class="vote" data-vote="4.7">4.7</span>
      </div>
    </div>
  </main>  -->

  <footer class="footer">

    <div class="footer-content">
      <p class="footer-message">BlueScreen will always be with you from the moment you
         escape from the hustle and bustle of your daily life and 
         step into the land of dreamland. We wish you a good time.</p>

      <div class="footer-social-media">
        <a href="https://x.com/fatmanurgncdgn"><img class="Twitter-icon" src="twitter.png"></a>
        <a href="https://www.instagram.com/fnurgncdgn"><img class="Instagram-icon" src="instagram.png"></a>
        <a href="https://www.linkedin.com/in/fatma-nur-gen%C3%A7do%C4%9Fan-876a002a7/"><img class="LinkedIn-icon" src="linkedin.png"></a>
        <a href="mailto:fgencdogan@gmail.com"><img class="Gmail-icon" src="gmail.png"></a>
      </div>

      <h1 class="keep-watching">KEEP WATCHING..</h1>
      <h2 class="owner">Website by</h2>
      <h3 class="name">Fatma Nur Gençdoğan</h3>    

    </div>

  </footer>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-o2E8t0cP1+wC06K1WjML58b9W8jPvEjGmW/i+T7gT7/qe26QiTVAc6gvUzD1A5r9"
  crossorigin="anonymous"></script>
  
</body>

</html>
