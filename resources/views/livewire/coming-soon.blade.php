<div wire:init="loadComingSoon">
    @foreach($comingSoon as $game)
        <div class="game flex">
            <a href="">
                <img
                    src="{{ \Illuminate\Support\Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}"
                    alt="game cover" class="w-16 hover:opacity-75 transition duration-150 ease-in-out ">
            </a>
            <div class="ml-4">
                <a href="#"
                   class=" text-base leading-tight font-semibold hover:text-gray-400  mt-8">
                    {{$game['name']}}
                </a>
                <p class="text-gray-400">
                    {{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}

                </p>
            </div>
        </div>
    @endforeach
</div>
