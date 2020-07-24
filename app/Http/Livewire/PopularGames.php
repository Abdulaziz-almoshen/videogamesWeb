<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PopularGames extends Component
{

    public $popularGames = [];


    public function mount()
    {
        $before = Carbon::now()->subMonth(2)->timestamp;
        $after = Carbon::now()->addMonth(2)->timestamp;
        $gamesUnFormatted = Cache::remember('popular-games', 7, function () use ($before,$after) {
            return Http::withHeaders(
                config('services.igdb')
            )->withOptions([
                'body' => "
            fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count,slug ;
            where platforms = (48,49,130,6)
            & (first_release_date > {$before}
            & first_release_date < {$after});
            sort popularity desc;
            limit 12;
            "
            ])->get('https://api-v3.igdb.com/games/')->json();
        });



        $this->popularGames = $this->formatView($gamesUnFormatted);



    }

    public function render()
    {
        return view('livewire.popular-games');

    }
    public function formatView($games)
    {
        return collect($games)->map(function ($game){
           return collect($game)->merge([
               'imageURLCover' => \Illuminate\Support\Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
               'rating' => isset($game['rating']) ? round($game['rating']).'%' : 'No rate',
               'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
           ]) ;
        })->toArray();
    }
}
