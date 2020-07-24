@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="tracking-wide text-blue-500 font-semibold uppercase">popular games</h1>
        <livewire:popular-games/>
        {{--end populE GAMES--}}
        <div class="flex my-8">
            <div class="w-3/4">
                <h1 class="tracking-wide text-blue-500 font-semibold uppercase">Recently reviwed</h1>
                <livewire:recently-reviewed></livewire:recently-reviewed>
            </div> {{--end MOST REVIEWED--}}
            <div class="most-anticipated-list w-1/4">
                <h1 class="tracking-wide text-blue-500 font-semibold uppercase">Most anticipated</h1>
                <livewire:most-anticipated></livewire:most-anticipated>
                        {{--end ANTICIPATED GAMES--}}
                <div class="coming-soon-container pt-8 space-y-2">
                <h1 class="tracking-wide text-blue-500 font-semibold uppercase">Coming soon</h1>
                    <livewire:coming-soon></livewire:coming-soon>
                </div>
            </div>
        </div>
    </div> {{--end container--}}
@endsection
