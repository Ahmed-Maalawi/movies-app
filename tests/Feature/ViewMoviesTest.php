<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/genre/movie/list' => $this->fakePopularMovies(),
        ]);

        $response = $this->get(route('movies.index'));


        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
        $response->assertSee('Adventure, Drama, Mystery, Science Fiction, Thriller');
        $response->assertSee('Now Playing');
        $response->assertSee('Now Playing Fake Movie');
        $response->assertSuccessful();
    }

    public function the_movie_page_shows_the_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/*' => $this->fakeSingleMovie(),
        ]);


        $response = $this->get(route('movies.show', 985939));

        $response->assertSee('Fake Jumanji');
        $response->assertSee('Jeanne McCarthy');
        $response->assertSee('Casting Director');
        $response->assertSee('Dwayne Johnson');
    }



    public function fakeSingleMovie()
    {
        return Http::response([
                "adult" => false,
                "backdrop_path" => "/hreiLoPysWG79TsyQgMzFKaOTF5.jpg",
                "genres" => [
                    ["id" => 28, "name" => "Action"],
                    ["id" => 12, "name" => "Adventure"],
                    ["id" => 35, "name" => "Comedy"],
                    ["id" => 14, "name" => "Fantasy"],
                ],
                "homepage" => "http://jumanjimovie.com",
                "id" => 12345,
                "overview" => "As the gang return to Jumanji to rescue one of their own, they discover that nothing is as they expect. The players will have to brave parts unknown and unexplored.",
                "poster_path" => "/bB42KDdfWkOvmzmYkmK58ZlCa9P.jpg",
                "release_date" => "2019-12-04",
                "runtime" => 123,
                "title" => "Fake Jumanji: The Next Level",
                "vote_average" => 6.8,
                "credits" => [
                    "cast" => [
                        [
                            "cast_id" => 2,
                            "character" => "Dr. Smolder Bravestone",
                            "credit_id" => "5aac3960c3a36846ea005147",
                            "gender" => 2,
                            "id" => 18918,
                            "name" => "Dwayne Johnson",
                            "order" => 0,
                            "profile_path" => "/kuqFzlYMc2IrsOyPznMd1FroeGq.jpg",
                        ]
                    ],
                    "crew" => [
                        [
                            "credit_id" => "5d51d4ff18b75100174608d8",
                            "department" => "Production",
                            "gender" => 1,
                            "id" => 546,
                            "job" => "Casting Director",
                            "name" => "Jeanne McCarthy",
                            "profile_path" => null,
                        ]
                    ]
                ],
                "videos" => [
                    "results" => [
                        [
                            "id" => "5d1a1a9b30aa3163c6c5fe57",
                            "iso_639_1" => "en",
                            "iso_3166_1" => "US",
                            "key" => "rBxcF-r9Ibs",
                            "name" => "JUMANJI: THE NEXT LEVEL - Official Trailer (HD)",
                            "site" => "YouTube",
                            "size" => 1080,
                            "type" => "Trailer",
                        ]
                    ]
                ],
                "images" => [
                    "backdrops" => [
                        [
                            "aspect_ratio" => 1.7777777777778,
                            "file_path" => "/hreiLoPysWG79TsyQgMzFKaOTF5.jpg",
                            "height" => 2160,
                            "iso_639_1" => null,
                            "vote_average" => 5.388,
                            "vote_count" => 4,
                            "width" => 3840,
                        ]
                    ],
                    "posters" => [
                        [

                        ]
                    ]
                ]
            ], 200);
    }

    private function fakePopularMovies()
    {
        return Http::response([
            "results" => [
                [
                    "adult" => false,
                    "backdrop_path" => "/5hoS3nEkGGXUfmnu39yw1k52JX5.jpg",
                    "genre_ids" => [
                        28,
                        12,
                        14
                    ],
                    "id" => 960704,
                    "original_language" => "ja",
                    "original_title" => "鋼の錬金術師 完結編 最後の錬成",
                    "overview" => "The Elric brothers’ long and winding journey comes to a close in this epic finale, where they must face off against an unworldly, nationwide threat.",
                    "popularity" => 3794.105,
                    "poster_path" => "/AeyiuQUUs78bPkz18FY3AzNFF8b.jpg",
                    "release_date" => "2022-06-24",
                    "title" => "Fullmetal Alchemist => The Final Alchemy",
                    "video" => false,
                    "vote_average" => 6.1,
                    "vote_count" => 64
                ]
            ]
        ]);
    }

    private function fakeNowPlayingMovies()
    {
        return Http::response([
            "results" => [
                [
                    "adult" => false,
                    "backdrop_path" => "/5GA3vV1aWWHTSDO5eno8V5zDo8r.jpg",
                    "genre_ids" => [
                        27,
                        53
                    ],
                    "id" => 760161,
                    "original_language" => "en",
                    "original_title" => "Orphan => First Kill",
                    "overview" => "After escaping from an Estonian psychiatric facility, Leena Klammer travels to America by impersonating Esther, the missing daughter of a wealthy family. But when her mask starts to slip, she is put against a mother who will protect her family from the murderous “child” at any cost.",
                    "popularity" => 3713.014,
                    "poster_path" => "/pHkKbIRoCe7zIFvqan9LFSaQAde.jpg",
                    "release_date" => "2022-07-27",
                    "title" => "Orphan => First Kill",
                    "video" => false,
                    "vote_average" => 6.9,
                    "vote_count" => 987
                ]
            ],
        ], 200);
    }

    private function fakeGenre()
    {
        return Http::response([
            "genres" => [
                [
                    "id" => 28,
                    "name" => "Action"
                ]
            ]
        ], 200);
    }

}
