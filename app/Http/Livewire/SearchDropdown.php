<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];


    public function render()
    {
        if(strlen($this->search) >= 3) {

            $game = new Game();
            $accessToken = $game->getAccessToken();

            $this->searchResults = Http::withHeaders([
                'Client-ID' => config('services.igdb.client_id'),
            ])->withToken($accessToken)
                ->withBody("
            search \"{$this->search}\";
            fields name, cover.url, slug;
                    limit 8;", "text/plain"
                )
                ->post('https://api.igdb.com/v4/games')
                ->json();
        }

        return view('livewire.search-dropdown');
    }
}
