<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{

    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;

    public function __construct($popularMovies, $nowPlayingMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
    }

    public function popularMovies()
    {
        // $this->formatMovies($this->popularMovies);
        return collect($this->popularMovies)->map(function($movie1) {
          return $movie1->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500/'. $movie1['poster_path'],
            'release_date' => Carbon::parse($movie1['release_date'])->format('M d, Y'),
          ])->only([
              'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres',
          ]);
        })->dump();
    }

    public function nowPlayingMovies()
    {
        // $this->formatMovies($this->nowPlayingMovies);
        return collect($this->nowPlayingMovies)->map(function($movie) {
          return $movie->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
            'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
            ])->only([
              'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres',
          ]);
        })->dump();
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        })->dump();
    }

    private function formatMovies($movies)
    {
        return collect($movies)->map(function ($movie) {
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
                // 'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ])->only([
                'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres',
            ]);
        });
    }
}
