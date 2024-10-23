const api_key = 'f3090c60bbf7d2ca05c8a7afe0f60361'; 
const genres_list_http = 'https://api.themoviedb.org/3/genre/tv/list'; 
const series_topRated_http = 'https://api.themoviedb.org/3/tv/top_rated'; 

const categoryList = document.getElementById('category-list');
const seriesTopRated = document.querySelector('.seriesTopRated');

fetch(genres_list_http + '?api_key=' + api_key)
  .then(async data => showCategories(await data.json()))
  .catch(error => console.error('Hata:', error));

function showCategories(data) {
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

let currentPage = 1;

function fetchSeries(page) {
  fetch(series_topRated_http + '?api_key=' + api_key + '&page=' + page)
    .then(async data => showTopRatedSeries(await data.json()))
    .catch(error => console.error('Hata:', error));
}

function showTopRatedSeries(data) {
  seriesTopRated.innerHTML = '';
  data.results.forEach(series => {
    const { name, poster_path, vote_average, overview } = series;
    const seriesTopRatedElement = document.createElement('div');

    seriesTopRatedElement.classList.add('series');

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

    seriesTopRatedElement.innerHTML = `
          <img src="https://image.tmdb.org/t/p/w500${poster_path}" alt="${name}">
          <div class="series-info">
            <h3>${name}</h3>
            <span style="background-color: ${voteColor};">${formattedVote}</span>
          </div>
          <div class="overview">
            <h3>Overview</h3>
            ${overview}
          </div>
      `;

    seriesTopRated.appendChild(seriesTopRatedElement);
  });
}

// "Load More" butonu
const loadMoreBtn = document.getElementById('load-more-series'); 
loadMoreBtn.addEventListener('click', () => {
  currentPage++;
  fetchSeries(currentPage);
});

// İlk sayfa ile başlat
fetchSeries(currentPage);

//ScrollToUp butonu////////////////////////
// Butonu kontrol eden fonksiyon
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var mybutton = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block"; // Buton, sayfa aşağı kaydırıldığında görünecek
    } else {
        mybutton.style.display = "none"; // Sayfa en üstteyse buton gizlenecek
    }
}

// Butona tıklanınca sayfanın en üstüne çıkılmasını sağlayan fonksiyon
function topFunction() {
    document.body.scrollTop = 0; // Safari için
    document.documentElement.scrollTop = 0; // Chrome, Firefox, IE ve Opera için
}