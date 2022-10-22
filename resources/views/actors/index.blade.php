@extends('layouts.main')

@section('content')
    <div class="container px-8 md:px-10 pt-16 mx-auto border-b border-gray-800 pb-8">
        <div class="popular-movies">
            <h2 class="uppercase text-orange-500 text-lg font-semibold tracking-wide">popular person</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularActors as $actor)
                <div class="actor mt-8">
                    <a href="{{ route('actors.show', $actor['id']) }}">
                        <img class="hover:opacity-75 rounded transition ease-in-out duration-150" src="{{ $actor['profile_path'] }}" alt="cover">
                    </a>
                    <div class="mt-2">
                        <a class="mt-2 hover:text-gray-300 text-lg capitalize" href="">{{  $actor['name'] }}</a>
                        <div class="text-sm text-gray-400">
                            {{ $actor['known_for'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="page-load-status my-8 capitalize">
            <div class="flex flex justify-center items-center mt-16">
                <p class="infinite-scroll-request spinner text-4xl inline-block">
                    &nbsp;
                    {{--                <svg class="fill-blue-500" version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">--}}
                    {{--                    <path d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">--}}
                    {{--                        <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite"/>--}}
                    {{--                    </path>--}}
                    {{--                </svg>--}}
                </p>
            </div>
            <p class="infinite-scroll-last text-center text-4xl">End of content</p>
            <p class="infinite-scroll-error text-center text-4xl">Error...</p>
        </div>

        <div class="flex item-center justify-between capitalize mt-8 bg-red">
            @if($previous)
                <a href="/Actors/pages/{{ $previous }}" class="border-white border-2 rounded p-2 hidden">previous</a>
            @else
                <div></div>
            @endif
            @if($next)
                <a href="/Actors/pages/{{ $next }}" class="pagination__next border-white border-2 rounded p-2 hidden">next</a>
            @else
                <div></div>
            @endif
        </div>
    </div>

@endsection


@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        let elem = document.querySelector('.grid');
        let infScroll = new InfiniteScroll( elem, {
                    // options
                    path: '.pagination__next',
                    append: '.actor',
                    status: '.page-load-status'
                    // history: false,
        });
    </script>
@endsection
