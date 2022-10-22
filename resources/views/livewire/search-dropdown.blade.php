<div
    class="relative mt-4 md:mt-0"
    x-data="{isOpen: true}"
    @click.away="isOpen = false"
    @keydown.escape.window="isOpen = false"
    >

    <div class="absolute top-0">
        <svg class="fill-current text-gray-500 w-5 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>


    <input
        wire:model.debounce.500ms="search_input"
        class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none foucus:shadow-outline"
        placeholder="search"
        type="search" name="search" id="search"
        @focus="isOpen = true"
        >

        @if (strlen($search_input) > 2)
            <div
                class="absolute z-10 bottom w-64"
                x-show="isOpen"

                >
                @if (count($resultSearch) > 0)
                    <ul class="mt-4 bg-gray-800 rounded text-sm shadow">
                        @foreach ($resultSearch as $movie)
                            @if ($loop->index < 5)
                                <li class="block hover:bg-gray-400 {{ (! $loop->last)? 'border-b border-gray-500' : '' }}">
                                    <a href="{{ route('movies.show', $movie['id']) }}" class="flex items-center capitalize">
                                        <img class="w-10 mr-2 p-2" src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="">
                                        <span>{{ $movie['original_title'] }}</span>
                                    </a>
                                </li>



                            @endif
                        @endforeach
                    </ul>
                @else
                    <p class="capitalize mt-2 py-3 px-2 bg-gray-700 text-center shadow rounded">
                        no results founded ...
                    </p>
                @endif
            </div>
        @endif
</div>
