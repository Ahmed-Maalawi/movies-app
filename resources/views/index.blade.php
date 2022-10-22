@extends('layouts.main')

@section('content')
    <div class="container px-8 md:px-10 pt-16 mx-auto border-b border-gray-800 pb-8">
        <div class="popular-movies">
            <h2 class="uppercase text-orange-500 text-lg font-semibold tracking-wide">popular movies</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
    </div>
    <div class="container px-8 md:px-10 pt-16 mx-auto mb-12 border-b border-gray-800 pb-8">
        <div class="playing-movies-now">
            <h2 class="uppercase text-orange-500 text-lg font-semibold tracking-wide">playing movies now</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($nowPlayingMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
    </div>
@endsection
