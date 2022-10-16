<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{

    public $search_input = '';

    public function render()
    {
        $resultSearch = [];

        if(strlen($this->search_input) > 2)
        {
            $resultSearch = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search_input)
            ->json()['results'];

            // dump($resultSearch);

        }
        return view('livewire.search-dropdown', ['resultSearch' => $resultSearch]);
    }
}
