<?php

namespace Tests\Feature;

use App\Http\Livewire\PopularGames;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class PopularGamesTest extends TestCase
{

    public function test_the_main_page_shows_popular_games()
    {
        Http::fake([
            // Stub a string response for Google endpoints...
            'https://api.igdb.com/v4/games' => $this->fakePopularGames(),
        ]);

        Livewire::test(PopularGames::class)
            ->assertSet('popularGames', [])
            ->call('loadPopularGames')
            ->assertSee('Twelve Minutes')
            ->assertSee('PC')
            ->assertSee('PS4');

    }

    private function fakePopularGames()
    {
        return Http::response([
                0 => [
                    "id" => 16612,
                    "age_ratings" => [
                        0 => 46784,
                        1 => 46785,
                    ],
                    "aggregated_rating" => 78.75,
                    "aggregated_rating_count" => 11,
                    "alternative_names" => [
                        0 => 77283
                    ],
                    "artworks" => [
                        0 => 34117,
                        1 => 48168,
                    ],
                    "category" => 0,
                    "cover" => [
                        "id" => 175141,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co3r51.jpg",
                    ],
                    "created_at" => 1453288880,
                    "external_games" => [
                        0 => 112188,
                        1 => 1725203,
                        2 => 1923996,
                        3 => 2084773,
                        4 => 2185135,
                    ],
                    "first_release_date" => 1629331200,
                    "follows" => 11,
                    "game_engines" => [
                        0 => 13
                    ],
                    "game_modes" => [
                        0 => 1
                    ],
                    "genres" => [
                        0 => [
                            "id" => 2,
                            "name" => "Point-and-click",
                        ],
                        1 => [
                            "id" => 9,
                            "name" => "Puzzle",
                        ],
                        2 => [
                            "id" => 31,
                            "name" => "Adventure",
                        ],
                        3 => [
                            "id" => 32,
                            "name" => "Indie",
                        ]
                    ],
                    "hypes" => 53,
                    "involved_companies" => [
                        0 => [
                            "id" => 157116,
                            "company" => [
                                "id" => 9387,
                                "name" => "Luis Antonio",
                            ]
                        ],
                        1 => [
                            "id" => 157117,
                            "company" => [
                                "id" => 11662,
                                "name" => "Annapurna Interactive",
                            ]
                        ]
                    ],
                    "keywords" => [
                        0 => 117,
                        1 => 993,
                        2 => 1027,
                        3 => 2158,
                        4 => 9415,
                        5 => 25804,
                    ],
                    "name" => "Twelve Minutes",
                    "platforms" => [
                        0 => [
                            "id" => 6,
                            "abbreviation" => "PC",
                        ],
                        1 => [
                            "id" => 48,
                            "abbreviation" => "PS4",
                        ],
                        2 => [
                            "id" => 49,
                            "abbreviation" => "XONE",
                        ],
                        3 => [
                            "id" => 130,
                            "abbreviation" => "Switch",
                        ],
                        4 => [
                            "id" => 167,
                            "abbreviation" => "PS5",
                        ],
                        5 => [
                            "id" => 169,
                            "abbreviation" => "Series X",
                        ],
                    ],
                    "player_perspectives" => [
                        0 => 3,
                    ],
                    "rating" => 65.654496582728,
                    "rating_count" => 88,
                    "release_dates" => [
                        0 => 289599,
                        1 => 289600,
                        2 => 289601,
                        3 => 326249,
                        4 => 326250,
                        5 => 326251,
                        6 => 336773,
                    ],
                    "screenshots" => [
                        0 => [
                            "id" => 322749,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 16612,
                            "height" => 2160,
                            "image_id" => "sc6x19",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6x19.jpg",
                            "width" => 3840,
                            "checksum" => "08a0a453-09c0-e5cd-5f4a-7b84db6d8f18",
                        ],
                        1 => [
                            "id" => 322750,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 16612,
                            "height" => 2160,
                            "image_id" => "sc6x1a",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6x1a.jpg",
                            "width" => 3840,
                            "checksum" => "632c9fb6-0ce8-5e5d-ce62-1ec917990838",
                        ],
                        2 => [
                            "id" => 322751,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 16612,
                            "height" => 2160,
                            "image_id" => "sc6x1b",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6x1b.jpg",
                            "width" => 3840,
                            "checksum" => "6d2e9dd4-36c9-3576-e0d0-d622e7b5ac19",
                        ],
                        3 => [
                            "id" => 322752,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 16612,
                            "height" => 2160,
                            "image_id" => "sc6x1c",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6x1c.jpg",
                            "width" => 3840,
                            "checksum" => "a716d5ba-1d88-7e18-dd9f-53da28583561"
                        ],
                        4 => [
                            "id" => 322753,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 16612,
                            "height" => 2160,
                            "image_id" => "sc6x1d",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6x1d.jpg",
                            "width" => 3840,
                            "checksum" => "306489ee-30d7-4770-87c6-3aead18c527b",
                        ],
                        5 => [
                            "id" => 322754,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 16612,
                            "height" => 2160,
                            "image_id" => "sc6x1e",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6x1e.jpg",
                            "width" => 3840,
                            "checksum" => "1b41c83b-3abf-0c44-3316-6fd0ec380f83",
                        ],
                        6 => [
                            "id" => 322755,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 16612,
                            "height" => 2160,
                            "image_id" => "sc6x1f",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6x1f.jpg",
                            "width" => 3840,
                            "checksum" => "5a76aac3-71fd-970f-fc5e-667f51dcfdfc",
                        ],
                    ],
                    "similar_games" => [
                        0 => [
                            "id" => 18011,
                            "cover" => [
                                "id" => 75964,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1mm4.jpg",
                            ],
                            "name" => "Rusty Lake Hotel",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 14,
                                    "abbreviation" => "Mac",
                                ],
                                2 => [
                                    "id" => 34,
                                    "abbreviation" => "Android",
                                ],
                                3 => [
                                    "id" => 39,
                                    "abbreviation" => "iOS",
                                ],
                            ],
                            "rating" => 58.637758265273,
                            "slug" => "rusty-lake-hotel",
                        ],
                        1 => [
                            "id" => 20342,
                            "cover" => [
                                "id" => 92176,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1z4g.jpg",
                            ],
                            "name" => "Toby: The Secret Mine",
                            "platforms" => [
                                0 => [
                                    "id" => 3,
                                    "abbreviation" => "Linux",
                                ],
                                1 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                2 => [
                                    "id" => 14,
                                    "abbreviation" => "Mac",
                                ],
                                3 => [
                                    "id" => 34,
                                    "abbreviation" => "Android",
                                ],
                                4 => [
                                    "id" => 39,
                                    "abbreviation" => "iOS",
                                ],
                                5 => [
                                    "id" => 41,
                                    "abbreviation" => "WiiU",
                                ],
                                6 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4",
                                ],
                                7 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE",
                                ],
                                8 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch",
                                ],
                            ],
                            "rating" => 70.0,
                            "slug" => "toby-the-secret-mine",
                        ],
                        2 => [
                            "id" => 24426,
                            "cover" => [
                                "id" => 81872,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1r68.jpg",
                            ],
                            "name" => "Forgotton Anne",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 14,
                                    "abbreviation" => "Mac",
                                ],
                                2 => [
                                    "id" => 34,
                                    "abbreviation" => "Android",
                                ],
                                3 => [
                                    "id" => 39,
                                    "abbreviation" => "iOS",
                                ],
                                4 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4",
                                ],
                                5 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE",
                                ],
                                6 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch",
                                ],
                            ],
                            "rating" => 72.736810384693,
                            "slug" => "forgotton-anne",
                        ],
                        3 => [
                            "id" => 25222,
                            "cover" => [
                                "id" => 185047,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co3ys7.jpg",
                            ],
                            "name" => "Rusty Lake: Roots",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 14,
                                    "abbreviation" => "Mac",
                                ],
                                2 => [
                                    "id" => 39,
                                    "abbreviation" => "iOS",
                                ]
                            ],
                            "rating" => 76.539061137726,
                            "slug" => "rusty-lake-roots",
                        ],
                        4 => [
                            "id" => 25646,
                            "cover" => [
                                "id" => 82168,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1reg.jpg",
                            ],
                            "name" => "Don't Knock Twice",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4",
                                ],
                                2 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE",
                                ],
                                3 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch",
                                ],
                            ],
                            "rating" => 69.796155118893,
                            "slug" => "dont-knock-twice",
                        ],
                        5 => [
                            "id" => 27725,
                            "cover" => [
                                "id" => 155160,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co3bq0.jpg",
                            ],
                            "name" => "The Room: Old Sins",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 34,
                                    "abbreviation" => "Android",
                                ],
                                2 => [
                                    "id" => 39,
                                    "abbreviation" => "iOS",
                                ],
                            ],
                            "rating" => 81.291294294344,
                            "slug" => "the-room-old-sins",
                        ],
                        6 => [
                            "id" => 54678,
                            "cover" => [
                                "id" => 72701,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1k3h.jpg",
                            ],
                            "name" => "Rusty Lake Paradise",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 14,
                                    "abbreviation" => "Mac",
                                ],
                                2 => [
                                    "id" => 34,
                                    "abbreviation" => "Android",
                                ],
                                3 => [
                                    "id" => 39,
                                    "abbreviation" => "iOS",
                                ],
                            ],
                            "rating" => 68.371802496719,
                            "slug" => "rusty-lake-paradise",
                        ],
                        7 => [
                            "id" => 55190,
                            "cover" => [
                                "id" => 114450,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2gb6.jpg",
                            ],
                            "name" => "Pikuniku",
                            "platforms" => [
                                0 => [
                                    "id" => 3,
                                    "abbreviation" => "Linux",
                                ],
                                1 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                2 => [
                                    "id" => 14,
                                    "abbreviation" => "Mac",
                                ],
                                3 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE",
                                ],
                                4 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch",
                                ],
                                5 => [
                                    "id" => 170,
                                    "abbreviation" => "Stadia",
                                ],
                            ],
                            "rating" => 66.99390717084,
                            "slug" => "pikuniku",
                        ],
                        8 => [
                            "id" => 56033,
                            "cover" => [
                                "id" => 82165,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1red.jpg",
                            ],
                            "name" => "Dream Alone",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch",
                                ]
                            ],
                            "rating" => 82.0,
                            "slug" => "dream-alone",
                        ],
                        9 => [
                            "id" => 81275,
                            "cover" => [
                                "id" => 82239,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rgf.jpg",
                            ],
                            "name" => "Unforeseen Incidents",
                            "platforms" => [
                                0 => [
                                    "id" => 3,
                                    "abbreviation" => "Linux",
                                ],
                                1 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                2 => [
                                    "id" => 14,
                                    "abbreviation" => "Mac",
                                ],
                                3 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch",
                                ],
                            ],
                            "rating" => 72.374202643253,
                            "slug" => "unforeseen-incidents",
                        ],
                    ],
                    "slug" => "twelve-minutes",
                    "storyline" => "
      You take the role of the husband, on what should be a romantic evening with your wife. The night turns into a nightmare when a police detective breaks into your home, accuses your wife of murder and beats you to death.\n
      Only for you to find yourself immediately returned to the exact moment you opened the front door, stuck in a 12 minute time loop, doomed to relive the same terror again and again. Unless you can find a way to use the knowledge of what’s coming to change the outcome and break the loop.,
      ",
                    "summary" => "A romantic evening with your wife turns into a violent invasion, as a man breaks into your home, accuses your wife of murder and beats you to death. Only for you to wake up and find yourself stuck in a twelve-minute time loop, doomed to relive the same terror again and again.",
                    "tags" => [
                        0 => 1,
                        1 => 20,
                        2 => 43,
                        3 => 268435458,
                        4 => 268435465,
                        5 => 268435487,
                        6 => 268435488,
                        7 => 536871029,
                        8 => 536871905,
                        9 => 536871939,
                        10 => 536873070,
                        11 => 536880327,
                        12 => 536896716,
                    ],
                    "themes" => [
                        0 => 1,
                        1 => 20,
                        2 => 43,
                    ],
                    "total_rating" => 72.202248291364,
                    "total_rating_count" => 99,
                    "updated_at" => 1643476857,
                    "url" => "https://www.igdb.com/games/twelve-minutes",
                    "videos" => [
                        0 => [
                            "id" => 38842,
                            "game" => 16612,
                            "name" => "Announcement Trailer",
                            "video_id" => "qQ2vsnapBhU",
                            "checksum" => "7ab964aa-5062-36e2-97f7-cd80853602ef",
                        ],
                        1 => [
                            "id" => 40096,
                            "game" => 16612,
                            "name" => "Gamescom 2020 Cast Reveal Trailer",
                            "video_id" => "E6CmZN9TYdI",
                            "checksum" => "dd6ccfdd-d295-89af-acca-953e7842f62c",
                        ],
                        2 => [
                            "id" => 50896,
                            "game" => 16612,
                            "name" => "Release Date Trailer",
                            "video_id" => "G6I2rP3-B9k",
                            "checksum" => "f1b18f78-ace1-1421-3d68-2b44042a31db",
                        ],
                    ],
                    "websites" => [
                        0 => [
                            "id" => 18378,
                            "category" => 1,
                            "game" => 16612,
                            "trusted" => false,
                            "url" => "http://twelveminutesgame.com/",
                            "checksum" => "1e04a7cc-c784-135e-52c2-778ca7d9eae6",
                        ],
                        1 => [
                            "id" => 18379,
                            "category" => 5,
                            "game" => 16612,
                            "trusted" => true,
                            "url" => "https://twitter.com/12minutesgame",
                            "checksum" => "b53523fa-3ab0-593e-d560-84c4b6e245e6",
                        ],
                        2 => [
                            "id" => 108230,
                            "category" => 4,
                            "game" => 16612,
                            "trusted" => true,
                            "url" => "https://www.facebook.com/twelveminutesgame",
                            "checksum" => "2c05ba20-57c7-de3e-6ad5-beee60d367c0",
                        ],
                        3 => [
                            "id" => 111387,
                            "category" => 13,
                            "game" => 16612,
                            "trusted" => true,
                            "url" => "https://store.steampowered.com/app/1097200",
                            "checksum" => "7a86cf19-dc51-bf40-78e2-f46f0329b5ec",
                        ],
                        4 => [
                            "id" => 147979,
                            "category" => 9,
                            "game" => 16612,
                            "trusted" => true,
                            "url" => "https://www.youtube.com/channel/UCoztP3NSW03Kd69KjQEIxeg",
                            "checksum" => "b67dd177-859b-2666-ee49-ebf4b70e55b1",
                        ],
                        5 => [
                            "id" => 246797,
                            "category" => 3,
                            "game" => 16612,
                            "trusted" => true,
                            "url" => "https://en.wikipedia.org/wiki/Twelve_Minutes",
                            "checksum" => "b2d770c2-af7f-7180-49fa-67f079f77a0b",
                        ],
                    ],
                    "checksum" => "e385e780-d735-1cb3-c756-e27442f3931a",
                ]
            ]
        );
    }

}
