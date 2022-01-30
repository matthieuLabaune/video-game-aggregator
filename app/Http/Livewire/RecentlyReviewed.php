<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
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

        $recentlyReviewedGamesUnformatted = Http::withHeaders([
            'Client-ID' => config('services.igdb.client_id'),
        ])->withToken($accessToken)
            ->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary, slug;
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

        $this->recentlyReviewedGames = $this->formatForView($recentlyReviewedGamesUnformatted);
    }


    public function render()
    {
        return view('livewire.recently-reviewed');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']).'%' : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        })->toArray();
    }
}