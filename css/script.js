const API_KEY = 'f3090c60bbf7d2ca05c8a7afe0f60361';
const BASE_URL = 'https://api.themoviedb.org/3';
const API_URL = BASE_URL + '/discover/movie?sort_by=popularity.desc&api_key=' + API_KEY;
const IMG_URL = 'https://image.tmdb.org/t/p/w500';
const movies = document.getElementById('movies');

getMovies(API_URL);

function getMovies(url) {
  fetch(url).then(res => res.json()).then(data => {
    console.log(data.results);
    showMovies(data.results);
  })
  .catch(error => console.log('Fault:', error));
  
  // Arama işlevini kullanmaya gerek yok, kaldırdım
}

function showMovies(data) {
  movies.innerHTML = ''; // Önceki filmleri temizle

  data.forEach(movie => {
    const { title, poster_path, vote_average, overview, id } = movie; // id'yi al
    const movieEl = document.createElement('div');
    movieEl.classList.add('movie');

    // Puanı formatla ve renk belirle
    const formattedVote = vote_average.toFixed(1);
    let voteColor;
    if (vote_average >= 8) {
      voteColor = 'green';
    } else if (vote_average >= 5) {
      voteColor = 'orange';
    } else {
      voteColor = 'red';
    }

    movieEl.innerHTML = `
        <a href="movie_detail.php?id=${id}"> <!-- Tıklanabilir link ekledik -->
          <img src="${IMG_URL + poster_path}" alt="${title}">
          <div class="movie-info">
            <h3>${title}</h3>
            <span style="background-color: ${voteColor};">${formattedVote}</span>
          </div>
          <div class="overview">
            <h3>Overview</h3>
            ${overview}
          </div>
        </a>
    `;

    movies.appendChild(movieEl);
  });
}

// Slider fonksiyonları
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
