<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipatedGames = [];

    /**
     * @return void
     */
    public function loadMostAnticipatedGames()
    {
        $game = new Game();
        $accessToken = $game->getAccessToken();

        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;
        $currentDate = Carbon::now()->timestamp;

        $mostAnticipatedGamesUnformatted = Http::withHeaders([
            'Client-ID' => config('services.igdb.client_id'),
        ])->withToken($accessToken)
            ->withBody("
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary, slug;
            where platforms = (48, 49, 130, 6)
            & cover != null
            & (first_release_date >= $currentDate
            & first_release_date < $afterFourMonths);
            sort rating desc;
            limit 4;",
                'text/plain'
            )
            ->post('https://api.igdb.com/v4/games')->json();

        $this->mostAnticipatedGames = $this->formatForView($mostAnticipatedGamesUnformatted);

    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']),
                'releaseDate' => Carbon::parse($game['first_release_date'])->format('M d, Y'),
            ]);
        })->toArray();
    }
}
