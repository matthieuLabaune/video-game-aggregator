<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RecentlyReviewed extends Component
{
    public $recentlyReviewedGames = [];

    /**
     * @return void
     */
    public function loadRecentlyReviewedGames()
    {
        $game = new Game();
        $accessToken = $game->getAccessToken();

        $before = Carbon::now()->subMonths(6)->timestamp;
        $currentDate = Carbon::now()->timestamp;

        $this->recentlyReviewedGames = Http::withHeaders([
            'Client-ID' => config('services.igdb.client_id'),
        ])->withToken($accessToken)
            ->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
                        where platforms = (48, 49, 130, 6)
                        & (first_release_date >= $before
                        & first_release_date < $currentDate
                        & rating_count > 5);
                        sort rating desc;
                        limit 3;",
                'text/plain'
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();
    }


    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
