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

  <div class="slideshow-container">

    <div class="mySlides">
      <div class="quote">Sometimes it’s the smallest things that take up the most room in your heart.</div>
      <p class="author">- (Winnie the Pooh)</p>
    </div>

    <div class="mySlides">
      <div class="quote">After all, tomorrow is another day.</div>
      <p class="author">- (Gone with the Wind)</p>
    </div>

    <div class="mySlides">
      <div class="quote">I don't want to survive. I want to live.</div>
      <p class="author">- (The Hunger Games)</p>
    </div>

    <div class="mySlides">
      <div class="quote">Hope is a good thing, maybe the best of things, and no good thing ever dies.</div>
      <p class="author">- (The Shawshank Redemption)</p>
    </div>

    <div class="mySlides">
      <div class="quote">You don’t have to be a hero to save the world.</div>
      <p class="author">- (The Amazing Spider-Man)</p>
    </div>

    <div class="mySlides">
      <div class="quote">You have to see the world for what it is, not for what you want it to be.</div>
      <p class="author">- (The Pursuit of Happyness)</p>
    </div>

    <div class="mySlides">
      <div class="quote">This isn’t a game. This is a life.</div>
      <p class="author">- (12 Angry Men)</p>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>

   <!-- Bu alan arama sonuçlarını göstermek için -->
   <div id="search-results"></div>

  <div class="title-movies-container"></div>
  <div class="title-movies-container1"></div>

  <div class="home-movies-title">Popular Movies</div>

  <main id="movies">
  <div class="movie" data-id="12345">
    <span class="vote" data-vote="4.7">4.7</span>
    <div class="movie-info">
      <h3>Movie Title</h3>
    </div>
  </div>
</main>


<!-- Modal Yapısı -->
<div class="modal fade" id="movieModal" tabindex="-1" aria-labelledby="movieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="movieModalLabel">Movie Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modalPoster" src="" alt="Movie Poster" class="img-fluid">
        <p id="modalOverview"></p>
        <p><strong>Rating:</strong> <span id="modalRating"></span></p>
        <p><strong>Release Date:</strong> <span id="modalReleaseDate"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


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

  <script src="css/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-o2E8t0cP1+wC06K1WjML58b9W8jPvEjGmW/i+T7gT7/qe26QiTVAc6gvUzD1A5r9"
    crossorigin="anonymous"></script>


  <script>
    const api_key = 'f3090c60bbf7d2ca05c8a7afe0f60361'; // TMDB API anahtarınızı buraya yazın
    const search_url = `https://api.themoviedb.org/3/search/multi?api_key=${api_key}&query=`; // Hem film hem dizi arayacak
    const movie_url = `https://api.themoviedb.org/3/movie/`;


    function search() {
      const searchInput = document.getElementById('search-input').value; // Arama inputunu al
      if (searchInput.trim() !== '') { // Boş arama yapılmasını önle
        fetch(search_url + encodeURIComponent(searchInput)) // Arama sorgusu ile TMDB'ye istek gönder
          .then(response => response.json())
          .then(data => showSearchResults(data.results))
          .catch(error => console.error('Hata:', error));
      }
    }

    function showSearchResults(results) {
      const searchResultsContainer = document.getElementById('search-results');
      searchResultsContainer.innerHTML = ''; // Önceki sonuçları temizle

      if (results.length === 0) {
        searchResultsContainer.innerHTML = '<p>No results found.</p>';
        return;
      }

      results.forEach(item => {
        const resultItem = document.createElement('div');
        resultItem.classList.add('result-item');

        let title = item.title || item.name; // Film için title, dizi için name
        let posterPath = item.poster_path ? `https://image.tmdb.org/t/p/w500${item.poster_path}` : 'default.jpg'; // Poster varsa göster yoksa default resim

        resultItem.innerHTML = `
            <img src="${posterPath}" alt="${title}">
            <h3>${title}</h3>
            <p>Rating: ${item.vote_average}</p>
        `;

        searchResultsContainer.appendChild(resultItem);
      });
    }
  </script>


<script>
  // TMDB API anahtarınızı ve temel URL'yi tanımlayın

  // Film kartlarına tıklama olayı için dinleyici ekleyin
document.addEventListener('DOMContentLoaded', () => {  
  document.querySelectorAll('.movie').forEach(movie => {
    movie.addEventListener('click', () => {
      const movieId = movie.getAttribute('data-id'); // Her film kartına ID atayın
      fetchMovieDetails(movieId);
    });
  });
});


  // Film detaylarını çekme ve modal'a doldurma fonksiyonu
  function fetchMovieDetails(movieId) {
    fetch(`${movie_url}${movieId}?api_key=${api_key}`)
      .then(response => response.json())
      .then(data => {
        // Modal bilgilerini güncelle
        document.getElementById('movieModalLabel').innerText = data.title || data.name;
        document.getElementById('modalPoster').src = `https://image.tmdb.org/t/p/w500${data.poster_path}`;
        document.getElementById('modalOverview').innerText = data.overview;
        document.getElementById('modalRating').innerText = data.vote_average;
        document.getElementById('modalReleaseDate').innerText = data.release_date;

        // Modal'ı göster
        const movieModal = new bootstrap.Modal(document.getElementById('movieModal'));
        movieModal.show();
      })
      .catch(error => console.error('Error fetching movie details:', error));
  }
</script>



</body>

</html>