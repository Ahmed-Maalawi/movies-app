<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
    public $actors_socialMedia = [];
    public $actor;
    public $credits;

    public function __construct($actor_details, $actors_socialMedia, $credits)
    {
        $this->actor = $actor_details;
        $this->actors_socialMedia = $actors_socialMedia;
        $this->credits = $credits;

    }

    public function actor()
    {
        return collect($this->actor)
            ->merge([
                'profile_path' => $this->actor['profile_path']
                    ? 'https://image.tmdb.org/t/p/w500'.$this->actor['profile_path']
                    : 'https://ui-avatars.com/api/?size=235$name='.$this->actor['name'],
                'birthday' => $this->actor['birthday']
                    ? \Carbon\Carbon::parse($this->actor['birthday'])->format('M d, Y')
                    : 'unknown',
                'age' => $this->actor['birthday']
                    ? \Carbon\Carbon::parse($this->actor['birthday'])->age
                    : 'unknown',
                'place_of_birth' => $this->actor['place_of_birth']
                ? $this->actor['place_of_birth']
                : 'unknown',
            ]);
    }

    public function social()
    {
        return collect($this->actors_socialMedia)->merge([
            'twitter' => $this->actors_socialMedia['twitter_id']
                ? 'https://twitter.com/'.$this->actors_socialMedia['twitter_id']
                : null,
            'facebook' => $this->actors_socialMedia['facebook_id']
                ? 'https://www.facebook.com/'.$this->actors_socialMedia['facebook_id']
                : null,
            'instagram' => $this->actors_socialMedia['instagram_id']
                ? 'https://www.instagram.com/'.$this->actors_socialMedia['instagram_id']
                : null,
        ]);
    }


    public function movies()
    {
        return collect($this->actor['credits']['cast'])->map(function ($movie) {
            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'],
            ]);
        });
    }


    public function knowForMovies()
    {
        $castMovies = collect($this->credits)->get('cast');

        return collect($castMovies)->sortByDesc('popularity')->take(5)
            ->map(function ($movie) {
                return collect($movie)->merge([
                'poster_path' => $movie['poster_path']
                    ? 'https://image.tmdb.org/t/p/w185'.$movie['poster_path']
                    : 'https://via.placeholder.com/185x278',
                'title' => isset($movie['title'])
                    ? $movie['title']
                    : 'untitled',
                // 'poster_path' => 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'],
                // 'release_date' =>
                ]);
            });
    }

    public function knowForCredits()
    {
        $castMovies = collect($this->credits)->get('cast');

        return collect($castMovies)->map(function ($movie) {
            return collect($movie)->merge([
                'release_date' => $movie['release_date']
                    ? \Carbon\Carbon::parse($movie['release_date'])->format('Y')
                    : 'unknow',
                'original_title' => $movie['original_title']
                    ? $movie['original_title']
                    : 'title unknown',
                'character' => $movie['character']
                    ? $movie['character']
                    : 'actor name unknown'
            ])->only([
                'release_date', 'id', 'original_title', 'character'
            ]);
        });
    }
}
