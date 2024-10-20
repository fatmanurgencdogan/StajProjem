const api_key = 'f3090c60bbf7d2ca05c8a7afe0f60361'; // API anahtarınızı buraya yazın
const genres_list_http = 'https://api.themoviedb.org/3/genre/movie/list'; // TMDB için örnek URL

fetch(genres_list_http + '?api_key=' + api_key)
    .then(res => {
        if (!res.ok) {
            throw new Error('Ağ yanıtı sorunlu: ' + res.status);
        }
        return res.json();
    })
    .then(data => console.log(data))
    .catch(error => console.error('Hata:', error));
