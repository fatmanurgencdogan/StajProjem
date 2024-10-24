const api_key = 'f3090c60bbf7d2ca05c8a7afe0f60361'; // API anahtarınızı buraya yazın
const base_url = 'https://api.themoviedb.org/3';
const movie_genre_url = base_url + '/genre/movie/list';
const serie_genre_url = base_url + '/genre/tv/list';

const movie_topRated_http = base_url + '/movie/top_rated'; 
const series_topRated_http = base_url + '/tv/top_rated';

function fetchMovieCategories() {
    fetchCategories(movie_genre_url);
}

function fetchSerieCategories() {
    fetchCategories(serie_genre_url);
}

function fetchCategories(url) {
    fetch(url + '?api_key=' + api_key)
        .then(async data => showCategories(await data.json()))
        .catch(error => console.error('Hata:', error));
}

function showCategories(data) {
    const categoryList = document.getElementById('category-list');

    console.log(data);
    categoryList.innerHTML = '';
    data.genres.forEach(category => {
        const { name } = category;
        const categoryElement = document.createElement('li');

        categoryElement.textContent = name;

        categoryList.appendChild(categoryElement);
    });
}

// Filmler için

function fetchMovies(page) {
    fetch(movie_topRated_http + '?api_key=' + api_key + '&page=' + page)
        .then(async data => showTopRatedMovies(await data.json()))
        .catch(error => console.error('Hata:', error));
}

function showTopRatedMovies(data) {
    const movieTopRated = document.querySelector('.movieTopRated');
    movieTopRated.innerHTML = '';
    data.results.forEach(movie => {
        const movieTopRatedElement = document.createElement('div');
        movieTopRatedElement.classList.add('movie');

        const formattedVote = movie.vote_average.toFixed(1);
        let voteColor;
        if (movie.vote_average >= 8) {
            voteColor = 'green';
        } else if (movie.vote_average >= 5) {
            voteColor = 'orange';
        } else {
            voteColor = 'red';
        }

        movieTopRatedElement.innerHTML = `
            <img src="https://image.tmdb.org/t/p/w500${movie.poster_path}" alt="${movie.title}">
            <div class="movie-info">
              <h3>${movie.title}</h3>
              <span style="background-color: ${voteColor};">${formattedVote}</span>
            </div>
            <div class="overview">
              <h3>Overview</h3>
              ${movie.overview}
            </div>
        `;
        movieTopRated.appendChild(movieTopRatedElement);
    });
}

// Diziler için

function fetchSeries(page) {
    fetch(series_topRated_http + '?api_key=' + api_key + '&page=' + page)
        .then(async data => showTopRatedSeries(await data.json()))
        .catch(error => console.error('Hata:', error));
}

function showTopRatedSeries(data) {
    const serieTopRated = document.querySelector('.serieTopRated');
    serieTopRated.innerHTML = '';
    data.results.forEach(serie => {
        const serieTopRatedElement = document.createElement('div');
        serieTopRatedElement.classList.add('serie');

        const formattedVote = serie.vote_average.toFixed(1);
        let voteColor;
        if (serie.vote_average >= 8) {
            voteColor = 'green';
        } else if (serie.vote_average >= 5) {
            voteColor = 'orange';
        } else {
            voteColor = 'red';
        }

        serieTopRatedElement.innerHTML = `
            <img src="https://image.tmdb.org/t/p/w500${serie.poster_path}" alt="${serie.name}">
            <div class="serie-info">
              <h3>${serie.name}</h3>
              <span style="background-color: ${voteColor};">${formattedVote}</span>
            </div>
            <div class="overview">
              <h3>Overview</h3>
              ${serie.overview}
            </div>
        `;
        serieTopRated.appendChild(serieTopRatedElement);
    });
}

// İlk sayfa ile başlat
fetchMovies(currentMoviePage);
fetchSeries(currentSeriePage);
