<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ComingSoon extends Component
{

    public $comingSoonGames = [];

    /**
     * @return void
     */
    public function loadComingSoonGames()
    {
        $game = new Game();
        $accessToken = $game->getAccessToken();

        $currentDate = Carbon::now()->timestamp;

        $this->comingSoonGames = Http::withHeaders([
            'Client-ID' => config('services.igdb.client_id'),
        ])->withToken($accessToken)
            ->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
            where platforms = (48,49,130,6)
            & cover != null
            & first_release_date >= $currentDate;
            sort first_release_date asc;
            limit 4;",
                'text/plain'
            )
            ->post('https://api.igdb.com/v4/games')->json();
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}
