const api_key = 'f3090c60bbf7d2ca05c8a7afe0f60361'; // API anahtarınızı buraya yazın
const genres_list_http = 'https://api.themoviedb.org/3/genre/movie/list'; // film türlerini getirecek
const movie_topRated_http = 'https://api.themoviedb.org/3/movie/top_rated'; // top rated filmleri getirecek

const categoryList = document.getElementById('category-list');
const movieTopRated = document.querySelector('.movieTopRated');

fetch(genres_list_http + '?api_key=' + api_key)
  .then(async data => showCategories(await data.json()))
  .catch(error => console.error('Hata:', error));

function showCategories(data) {
  console.log(data);
  categoryList.innerHTML = '';
  data.genres.forEach(category => {
    const { name } = category;
    const categoryElement = document.createElement('li');

    categoryElement.innerHTML = `
              <li>${name}</li>
          `;

    categoryList.appendChild(categoryElement);
  });
}
//////////////////////////////////////////////////////////////
let currentPage = 1;

function fetchMovies(page){
fetch(movie_topRated_http + '?api_key=' + api_key + '&page=' + page)
  .then(async data => showTopRatedMovies(await data.json()))
  .catch(error => console.error('Hata:', error));
}

function showTopRatedMovies(data) {
  console.log(data);
  movieTopRated.innerHTML = '';
  data.results.forEach(movie => {
    const { title, poster_path, vote_average, overview } = movie;
    const movieTopRatedElement = document.createElement('div');
   
    movieTopRatedElement.classList.add('movie');

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

    movieTopRatedElement.innerHTML = `
          <img src="https://image.tmdb.org/t/p/w500${poster_path}" alt="${title}">
          <div class="movie-info">
            <h3>${title}</h3>
            <span style="background-color: ${voteColor};">${formattedVote}</span>
          </div>
          <div class="overview">
            <h3>Overview</h3>
            ${overview}
          </div>
      `;

    movieTopRated.appendChild(movieTopRatedElement);
  });
}

// "Load More" butonu için bir işlev
const loadMoreBtn = document.getElementById('load-more'); // Load More butonunu yakalayın
loadMoreBtn.addEventListener('click', () => {
  currentPage++; // Sayfayı artır
  fetchMovies(currentPage); // Yeni sayfayı getir
});

// İlk sayfa ile başlat
fetchMovies(currentPage);
