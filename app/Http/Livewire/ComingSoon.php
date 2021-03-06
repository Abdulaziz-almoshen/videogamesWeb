<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ComingSoon extends Component
{

    public $comingSoon = [];

    public function mount()
    {
        $current = Carbon::now()->timestamp;

        $this->comingSoon = Cache::remember('coming-soon', 1, function () use ($current) {
            return Http::withHeaders(
                config('services.igdb')
            )->withOptions([
                'body' => "
            fields name, cover.url, first_release_date  , popularity, platforms.abbreviation, rating, rating_count,summary ;
            where platforms = (48,49,130,6)
            & (first_release_date > {$current}
            & popularity > 5);
            sort popularity asc;
            limit 4;
            "
            ])->get('https://api-v3.igdb.com/games')->json();
        });
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}
