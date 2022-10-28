<?php

namespace App\ViewModels;

use ReflectionMethod;
use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{

    public $page_index;
    protected $popularActors;

    public function __construct($actors, $index)
    {
        $this->popularActors = $actors;
        $this->page_index = $index;
    }

    public function popularActors()
    {
        return collect($this->popularActors)->map(function ($actor) {
            return collect($actor)->merge([
                'profile_path' =>  $actor['profile_path']
                    ? 'https://image.tmdb.org/t/p/w235_and_h235_face/'.$actor['profile_path']
                    : 'https://ui-avatars.com/api/?size=235$name='.$actor['name'],
                'known_for' => collect($actor['known_for'])->where('media_type', 'movie')->pluck('title')
                    ->union( collect($actor['known_for'])->where('media_type', 'tv')->pluck('name') )
                    ->implode(', '),
            ])->only([
                'name', 'id', 'profile_path', 'known_for',
            ]);
        });
    }

    public function next()
    {
        return $this->page_index < 500 ? $this->page_index+1 : null;
    }

    public function previous()
    {
        return $this->page_index > 1 ? $this->page_index-1 : null;
    }


}
