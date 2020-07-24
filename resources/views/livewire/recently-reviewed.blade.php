    <div class="recently-reviwed-container space-y-12 mt-8 mr-32">
        @foreach( $recentlyReviwed as $game)
            <div class="bg-gray-800 shadow-lg flex rounded-lg p-6">
                <div class="relative flex-none">
                    <a href="">
                        <img
                            src="{{ \Illuminate\Support\Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}"
                            alt="game cover" class="w-48 hover:opacity-75 transition duration-150 ease-in-out ">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full -mr-6 -mb-6">
                        <div class="flex justify-center items-center h-full font-semibold text-xs ">
                            {{ round($game['rating']).'%' }}
                        </div>
                    </div>
                </div>
                <div class="px-10">
                    <a href="#"
                       class=" block text-base leading-tight font-semibold hover:text-gray-400  mt-8">
                        {{ $game['name'] }}
                    </a>
                    <div class="text-gray-400 mt-4">
                        @foreach($game['platforms'] as $platform)
                            @if(array_key_exists('abbreviation', $platform))
                                {{ $platform['abbreviation']}}
                            @endif
                        @endforeach
                    </div>
                    <div class="mt-8">
                        <p>
                            {{ $game['summary'] }}
                        </p>
                    </div>
                </div>
            </div>

         @endforeach
    </div>
