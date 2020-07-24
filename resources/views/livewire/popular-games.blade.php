    <div class="populate-games grid grid-cols-6 gap-12 border-b border-gray-400" >
    @forelse($popularGames as $game)
                <div class="game my-8 ">
                    <div class="relative inline-block">
                        <a href="{{route('game.show',$game['slug'])}}">
                            <img src="{{ $game['imageURLCover'] }}" alt="game cover" class="hover:opacity-75 transition duration-150 ease-in-out ">
                        </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                                <div class="flex justify-center items-center h-full font-semibold text-xs ">
                                    {{ $game['rating']}}
                                </div>
                            </div>
                    </div>
                    <a href="#" class="block text-base leading-tight font-semibold hover:text-gray-400 mt-8">
                        {{ $game['name'] }}
                    </a>
                    <div class="text-gray-400 mt-1">
                         {{ $game['platforms']}}
                    </div>
                </div>
        @empty
        @foreach(range(1,12) as $game)
        <div class="spinner mt-8">
            <div class="game my-8 ">
                <div class="relative inline-block">
                    <div>
                        <div class="bg-gray-800 h-56 w-40"> </div>
                    </div>
                </div>
                <div class="bg-gray-800 block text-transparent text-lg leading-tight  hover:text-gray-400 mt-3">
                   name goes here
                </div>
                <div class="text-transparent bg-gray-800 inline-block mt-1">
                    P{laystaion,PCC,$twins
                </div>
            </div>
        </div>
        @endforeach
        @endforelse
    </div>
