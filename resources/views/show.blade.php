@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img class="w-64 md:w-96 ml-2 md:ml-6" src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="cover-img">
            <div class="md:ml-24 ml-0 mt-4 md:mt-0">
                <h2 class="text-4xl font-semibold capitalize">{{ $movie['original_title'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-xl mt-4 md:mt-1">
                    <svg class="fill-current text-orange-400 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    <span class="ml-1">{{ $movie['vote_average'] }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }} @if(! $loop->last),@endif
                        @endforeach
                        {{-- Action, Thriller, Comedy --}}
                    </span>
                </div>

                <p class="mt-12 text-gray-300">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold capitalize">featured cast</h4>
                    <div class="flex flex-col md:flex-row mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                            <div class="ml-0 dm:ml-8 mt-4 md:mt-0 mr-8">
                                <div>{{  $crew['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="{{ 'https://youtube.com/watch?v='.$movie['videos']['results'][0]['key'] }}" class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-300 transition ease-in-out duration-150 capitalize inline-flex">
                            <svg class="mr-1 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 3H3c-1.11 0-2 .89-2 2v12c0 1.1.89 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.11-.9-2-2-2zm0 14H3V5h18v12zm-5-6l-7 4V7z"/></svg>
                            play trailer</a>
                    </div>
                @endif
            </div>
        </div>
    </div> <!-- end movie-info -->

    <div class="movie-cast-info border-b border-gray-800 mb-12">
        <div class="container mx-auto px-12 py-16">
            <h2 class="text-xl font-semibold capitalize">cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $actor)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                <img class="hover:opacity-75 transition ease-in-out duration-150 rounded" src="{{ (isset($actor['profile_path']))? 'https://image.tmdb.org/t/p/w500'.$actor['profile_path'] : asset('img/unknown.jpg') }}" alt="cast-member">
                            </a>
                            <div class="mt-2 ">
                                <a class="mt-2 hover:text-gray-300 text-lg capitalize" href="">{{ $actor['name'] }}</a>
                                <div class="text-gray-400 text-sm">
                                    {{  $actor['character'] }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> <!-- end movie-cast-info -->

    <div class="movie-images border-b border-gray-800 mb-12">
        <div class="container mx-auto px-12 py-16">
            <h2 class="text-xl font-semibold capitalize">images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                @foreach ($movie['images']['backdrops'] as $img)
                    @if ($loop->index < 9)
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-75 transition ease-in-out duration-150 rounded" src="{{ (isset($img['file_path']))? 'https://image.tmdb.org/t/p/w500'.$img['file_path'] : asset('img/unknown.jpg') }}" alt="cast-member">
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> <!-- end movie-images -->
@endsection
