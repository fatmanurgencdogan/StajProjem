<?php
session_start();
$api_key = 'f3090c60bbf7d2ca05c8a7afe0f60361'; // Your TMDB API key
$movieId = $_GET['id']; // Get the movie ID from the URL

// Fetch movie details from TMDB API
$movieUrl = "https://api.themoviedb.org/3/movie/$movieId?api_key=$api_key";
$movieData = file_get_contents($movieUrl);
$movie = json_decode($movieData);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title><?php echo $movie->title; ?></title>
</head>

<body>
  <nav class="navbar">
    <!-- Your navigation code here -->
  </nav>

  <div class="container">
    <h1><?php echo $movie->title; ?></h1>
    <img src="https://image.tmdb.org/t/p/w500<?php echo $movie->poster_path; ?>" alt="Poster" class="img-fluid">
    <p><strong>Overview:</strong> <?php echo $movie->overview; ?></p>
    <p><strong>Rating:</strong> <?php echo $movie->vote_average; ?></p>
    <p><strong>Release Date:</strong> <?php echo $movie->release_date; ?></p>
    <a href="movies.php" class="btn btn-primary">Back to Movies</a>
  </div>

  <footer class="footer">
    <!-- Your footer code here -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
