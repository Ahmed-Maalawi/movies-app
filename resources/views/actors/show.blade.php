@extends('layouts.main')

@section('content')
    <div class="actor-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img class="w-64 md:w-96 ml-2 md:ml-6" src="{{ $actor['profile_path'] }}" alt="actor-img">
                <div class="w-76 ">
                    <ul class="flex items-center ml-2 md:ml-6 mt-8">
                       @if($social['instagram'])
                        <li>
                            <a target="_blank" href="{{ $social['instagram'] }}" title="instagram"><svg class="fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g  stroke="none" stroke-width="1"><g transform="translate(-500.000000, -160.000000)"><path d="M524.000048,160 C517.481991,160 516.664686,160.027628 514.104831,160.144427 C511.550311,160.260939 509.805665,160.666687 508.279088,161.260017 C506.700876,161.873258 505.362454,162.693897 504.028128,164.028128 C502.693897,165.362454 501.873258,166.700876 501.260017,168.279088 C500.666687,169.805665 500.260939,171.550311 500.144427,174.104831 C500.027628,176.664686 500,177.481991 500,184.000048 C500,190.518009 500.027628,191.335314 500.144427,193.895169 C500.260939,196.449689 500.666687,198.194335 501.260017,199.720912 C501.873258,201.299124 502.693897,202.637546 504.028128,203.971872 C505.362454,205.306103 506.700876,206.126742 508.279088,206.740079 C509.805665,207.333313 511.550311,207.739061 514.104831,207.855573 C516.664686,207.972372 517.481991,208 524.000048,208 C530.518009,208 531.335314,207.972372 533.895169,207.855573 C536.449689,207.739061 538.194335,207.333313 539.720912,206.740079 C541.299124,206.126742 542.637546,205.306103 543.971872,203.971872 C545.306103,202.637546 546.126742,201.299124 546.740079,199.720912 C547.333313,198.194335 547.739061,196.449689 547.855573,193.895169 C547.972372,191.335314 548,190.518009 548,184.000048 C548,177.481991 547.972372,176.664686 547.855573,174.104831 C547.739061,171.550311 547.333313,169.805665 546.740079,168.279088 C546.126742,166.700876 545.306103,165.362454 543.971872,164.028128 C542.637546,162.693897 541.299124,161.873258 539.720912,161.260017 C538.194335,160.666687 536.449689,160.260939 533.895169,160.144427 C531.335314,160.027628 530.518009,160 524.000048,160 Z M524.000048,164.324317 C530.40826,164.324317 531.167356,164.348801 533.69806,164.464266 C536.038036,164.570966 537.308818,164.961946 538.154513,165.290621 C539.274771,165.725997 540.074262,166.246066 540.91405,167.08595 C541.753934,167.925738 542.274003,168.725229 542.709379,169.845487 C543.038054,170.691182 543.429034,171.961964 543.535734,174.30194 C543.651199,176.832644 543.675683,177.59174 543.675683,184.000048 C543.675683,190.40826 543.651199,191.167356 543.535734,193.69806 C543.429034,196.038036 543.038054,197.308818 542.709379,198.154513 C542.274003,199.274771 541.753934,200.074262 540.91405,200.91405 C540.074262,201.753934 539.274771,202.274003 538.154513,202.709379 C537.308818,203.038054 536.038036,203.429034 533.69806,203.535734 C531.167737,203.651199 530.408736,203.675683 524.000048,203.675683 C517.591264,203.675683 516.832358,203.651199 514.30194,203.535734 C511.961964,203.429034 510.691182,203.038054 509.845487,202.709379 C508.725229,202.274003 507.925738,201.753934 507.08595,200.91405 C506.246161,200.074262 505.725997,199.274771 505.290621,198.154513 C504.961946,197.308818 504.570966,196.038036 504.464266,193.69806 C504.348801,191.167356 504.324317,190.40826 504.324317,184.000048 C504.324317,177.59174 504.348801,176.832644 504.464266,174.30194 C504.570966,171.961964 504.961946,170.691182 505.290621,169.845487 C505.725997,168.725229 506.246066,167.925738 507.08595,167.08595 C507.925738,166.246066 508.725229,165.725997 509.845487,165.290621 C510.691182,164.961946 511.961964,164.570966 514.30194,164.464266 C516.832644,164.348801 517.59174,164.324317 524.000048,164.324317 Z M524.000048,171.675683 C517.193424,171.675683 511.675683,177.193424 511.675683,184.000048 C511.675683,190.806576 517.193424,196.324317 524.000048,196.324317 C530.806576,196.324317 536.324317,190.806576 536.324317,184.000048 C536.324317,177.193424 530.806576,171.675683 524.000048,171.675683 Z M524.000048,192 C519.581701,192 516,188.418299 516,184.000048 C516,179.581701 519.581701,176 524.000048,176 C528.418299,176 532,179.581701 532,184.000048 C532,188.418299 528.418299,192 524.000048,192 Z M539.691284,171.188768 C539.691284,172.779365 538.401829,174.068724 536.811232,174.068724 C535.22073,174.068724 533.931276,172.779365 533.931276,171.188768 C533.931276,169.598171 535.22073,168.308716 536.811232,168.308716 C538.401829,168.308716 539.691284,169.598171 539.691284,171.188768 Z"/></g></g></svg></a>
                        </li>
                        @endif
                        @if($social['facebook'])
                        <li>
                            <a target="_blank" href="{{ $social['facebook'] }}" title="facebook"><svg class="fill-white ml-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g  stroke="none" stroke-width="1"><g transform="translate(-200.000000, -160.000000)"><path d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z"/></g></g></svg></a>
                        </li>
                        @endif
                        @if($social['twitter'])
                        <li>
                            <a target="_blank" href="{{ $social['twitter'] }}" title="twitter"><svg class="fill-white ml-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 40"><g  fill-rule="evenodd" stroke="none" stroke-width="1"><g transform="translate(-300.000000, -164.000000)"><path d="M348,168.735283 C346.236309,169.538462 344.337383,170.081618 342.345483,170.324305 C344.379644,169.076201 345.940482,167.097147 346.675823,164.739617 C344.771263,165.895269 342.666667,166.736006 340.418384,167.18671 C338.626519,165.224991 336.065504,164 333.231203,164 C327.796443,164 323.387216,168.521488 323.387216,174.097508 C323.387216,174.88913 323.471738,175.657638 323.640782,176.397255 C315.456242,175.975442 308.201444,171.959552 303.341433,165.843265 C302.493397,167.339834 302.008804,169.076201 302.008804,170.925244 C302.008804,174.426869 303.747139,177.518238 306.389857,179.329722 C304.778306,179.280607 303.256911,178.821235 301.9271,178.070061 L301.9271,178.194294 C301.9271,183.08848 305.322064,187.17082 309.8299,188.095341 C309.004402,188.33225 308.133826,188.450704 307.235077,188.450704 C306.601162,188.450704 305.981335,188.390033 305.381229,188.271578 C306.634971,192.28169 310.269414,195.2026 314.580032,195.280607 C311.210424,197.99061 306.961789,199.605634 302.349709,199.605634 C301.555203,199.605634 300.769149,199.559408 300,199.466956 C304.358514,202.327194 309.53689,204 315.095615,204 C333.211481,204 343.114633,188.615385 343.114633,175.270495 C343.114633,174.831347 343.106181,174.392199 343.089276,173.961719 C345.013559,172.537378 346.684275,170.760563 348,168.735283"/></g></g></svg></a>
                        </li>
                        @endif
                        @if ($actor['homepage'])
                        <li>
                            <a target="_blank" href="{{ $actor['homepage'] }}" title="website"><svg class="fill-white ml-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"/></svg></a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="md:ml-8 ml-0 mt-4 md:mt-0">
                <h2 class="text-4xl font-semibold capitalize">{{ $actor['name'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-xl mt-4 md:mt-1">
                    <svg class="fill-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="48" viewBox="0 0 48 48"><path d="M24 12c2.21 0 4-1.79 4-4 0-.75-.21-1.46-.57-2.06L24 0l-3.43 5.94C20.21 6.54 20 7.25 20 8c0 2.21 1.79 4 4 4zm9.19 19.97l-2.15-2.15-2.16 2.15c-2.61 2.61-7.17 2.61-9.78 0l-2.15-2.15-2.16 2.15C13.5 33.28 11.77 34 9.92 34c-1.45 0-2.8-.46-3.92-1.23V42c0 1.1.9 2 2 2h32c1.1 0 2-.9 2-2v-9.23c-1.12.77-2.46 1.23-3.92 1.23-1.85 0-3.58-.72-4.89-2.03zM36 18H26v-4h-4v4H12c-3.31 0-6 2.69-6 6v3.08C6 29.24 7.76 31 9.92 31c1.05 0 2.03-.41 2.77-1.15l4.28-4.27 4.27 4.26c1.48 1.48 4.06 1.48 5.54 0l4.28-4.26 4.27 4.26c.74.74 1.72 1.15 2.77 1.15 2.16 0 3.92-1.76 3.92-3.92V24c-.02-3.31-2.71-6-6.02-6z"/></svg>
                    <span class="ml-1 capitalize">{{ $actor['birthday'] }} <span class="ml-2">( {{ $actor['age'] }} years old)</span></span>
                    <svg class="ml-8 fill-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    <span class="ml-1">{{ $actor['place_of_birth'] }}</span>
                </div>

                <h2 class="mt-8 font-semibold capitalize text-2xl">Biography</h2>
                <p class="mt-4 text-gray-300">
                    {{ $actor['biography'] }}
                </p>

                <h4 class="font-semibold capitalize mt-8 text-xl">known for</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @foreach($movies as $movie)
                        @if($loop->index < 5)
                            <a class="mt-8" href="{{ route('movies.show', $movie['id']) }}">
                                <img class="hover:opacity-75 rounded transition ease-in-out duration-150" src="{{ $movie['poster_path'] }}" alt="cover">
                                <h4 class="mt-2 hover:text-gray-300 text-sm capitalize">{{ $movie['title'] }}</h4>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- end actor-info -->

    <div class="credits border-b border-gray-800 mb-12">
        <div class="container mx-auto px-12 py-16">
            <h2 class="text-xl font-semibold capitalize">credits</h2>
            <ul class="list-disc leading-loose mt-8 pl-5">
                @foreach($actor['credits']['cast'] as $movie)
                    <li>{{ $movie['release_date'] }} &middot; <strong>{{ $movie['original_title'] }}</strong> as {{ $movie['character'] }}</li>
                @endforeach
            </ul>
        </div>
    </div> <!-- end actor-credits -->

@endsection
