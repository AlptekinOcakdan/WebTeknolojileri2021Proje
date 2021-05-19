<?php


class moviedbApi
{
static function getMovieInfo($movieID){
    // Yeni bir cURL özkaynağı oluşturalım
    $ch = curl_init();

// URL'yi ve ilgili seçenekleri belirtelim
    curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/movie/$movieID?api_key=7cf3ad1322aba094523c8125cbcbd022");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// URL'yi tarayıcıya aktaralım
    $result = curl_exec($ch);

// cURL özkaynağını kapatıp sistem özkaynaklarını serbest bırakalım
    curl_close($ch);
    return json_decode($result, true);
}
}