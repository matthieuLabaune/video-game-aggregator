<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Game extends Model
{
    use HasFactory;

    /**
     * Get the token access from IGDB using parameters in .env file
     * @return array|mixed
     */
    public function getAccessToken():string
    {
        $accessToken = Http::post('https://id.twitch.tv/oauth2/token', [
            'client_id' => config('services.igdb.client_id'),
            'client_secret' => config('services.igdb.client_secret'),
            'grant_type' => config('services.igdb.grant_type'),
        ])->json('access_token');
        return $accessToken;
    }
}
