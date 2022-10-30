<div class="mt-8">
    <a href="{{ route('tv.show', $tvshow['id']) }}">
        <img class="hover:opacity-75 rounded transition ease-in-out duration-150" src="{{ $tvshow['poster_path'] }}" alt="cover">
    </a>
    <div class="mt-2">
        <a class="mt-2 hover:text-gray-300 text-lg capitalize" href="">{{  $tvshow['name'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <svg class="fill-current text-orange-400 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <span class="ml-1">{{ $tvshow['vote_average'] }}</span>
            <span class="mx-2">|</span>
            <span>{{ $tvshow['first_air_date'] }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ( $tvshow['genre_ids'] as $gender)
                {{ $genres->get($gender) }} @if (! $loop->last),@endif
            @endforeach
        </div>
    </div>
</div>
