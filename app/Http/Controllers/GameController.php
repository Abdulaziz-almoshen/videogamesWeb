<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Collection;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $before = Carbon::now()->subMonth(2)->timestamp;
        $after = Carbon::now()->addMonth(2)->timestamp;
        $gamesUnFormatted = Http::withHeaders(
                config('services.igdb')
            )->withOptions([
            'body' => "
                    fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating,
                    slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*, videos.*, screenshots.*, similar_games.cover.url, similar_games.name, similar_games.rating,similar_games.platforms.abbreviation, similar_games.slug;
                    where slug=\"{$slug}\";
                "
            ])->get('https://api-v3.igdb.com/games/')->json();
            return view('show', [
                'game' => $this->formatView($gamesUnFormatted[0])
            ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function formatView($games)
    {
        $temp = collect($games)->merge([
            'imageURLCover' => Str::replaceFirst('thumb', 'cover_big', $games['cover']['url']),
            'trailer' => 'https://www.youtube.com/watch/'.$games['videos'][0]['video_id']
        ]);
        dump($temp);
        return $temp;
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
