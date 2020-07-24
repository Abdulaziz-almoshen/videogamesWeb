<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function mount()
    {
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonth(4)->timestamp;

        $this->mostAnticipated = Http::withHeaders(
            config('services.igdb')
        )->withOptions([
            'body' => "
            fields name, cover.url, first_release_date  , popularity, platforms.abbreviation, rating, rating_count,summary ;
            where platforms = (48,49,130,6)
            & (first_release_date > {$current}
            & first_release_date < {$afterFourMonths});
            sort popularity desc;
            limit 4;
            "
        ])->get('https://api-v3.igdb.com/games')->json();

    }
    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
