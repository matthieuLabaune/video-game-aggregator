<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class PopularGames extends Component
{
    public $popularGames = [];

    /**
     * @return void
     */
    public function loadPopularGames()
    {
        $game = new Game();
        $accessToken = $game->getAccessToken();

        $before = Carbon::now()->subMonths(6)->timestamp;
        $after = Carbon::now()->addMonths(6)->timestamp;

        $popularGamesUnformatted = Http::withHeaders([
            'Client-ID' => config('services.igdb.client_id'),
        ])->withToken($accessToken)
            ->withBody("
            fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug;
                    where total_rating_count > 5
                    & platforms = (48,49,130,6)
                    & (first_release_date >= $before
                    & first_release_date < $after);
                    sort total_rating_count desc;
                    limit 12;", "text/plain"
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

//        dump($this->formatForView($popularGamesUnformatted));

        $this->popularGames = $this->formatForView($popularGamesUnformatted);

        collect($this->popularGames)->filter(function ($game) {
           return $game['rating'];
        })->each(function ($game) {
            $this->emit('gameWithRatingAdded', [
                'slug' => $game['slug'],
                'rating' => $game['rating'] / 100
            ]);
        });

    }


    public function render()
    {
        return view('livewire.popular-games');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']) : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            ]);
        })->toArray();
    }
}
