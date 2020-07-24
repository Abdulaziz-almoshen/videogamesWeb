@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex">
            <div class="flex-none">
                <img
                    src="{{ $game['imageURLCover'] }}"
                    alt="game cover" class="w-64 hover:opacity-75 transition duration-150 ease-in-out ">
            </div>

            <div class="mr-56 ml-12 ">
                <h2 class="font-semibold text-4xl">
                    {{$game['name']}}
                </h2>
                <div class="text-gray-400">
                    <span> Advanger</span>
                     &middot;
                    <span> Square</span>
                    &middot;
                    <span> Playstation</span>
                </div>

                <div class="flex flex-wrap items-center mt-8 space-x-12 ">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                99%
                            </div>
                        </div>
                        <div class="ml-1 text-xs ">
                            Member Score
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                99%
                            </div>
                        </div>
                        <div class="ml-4 text-xs ">
                            Critics Score
                        </div>
                        <div class="ml-8 flex items-center space-x-4">
                            <div class="w-8 h-8 bg-gray-600 rounded-full flex justify-center items-center">
                                <a href="#" class="hover:text-gray-400">
                                    <i data-feather="twitter"></i>
                                </a>
                            </div>
                            <div class="w-8 h-8 bg-gray-600 rounded-full flex justify-center items-center">
                                <a href="#" class="hover:text-gray-400">
                                    <i data-feather="facebook"></i>

                                </a>
                            </div>
                            <div class="w-8 h-8 bg-gray-600 rounded-full flex justify-center items-center">
                                <a href="#" class="hover:text-gray-400">
                                    <i data-feather="instagram"></i>

                                </a>
                            </div>
                            <div class="w-8 h-8 bg-gray-600 rounded-full flex justify-center items-center">
                                <a href="#" class="hover:text-gray-400">
                                    <i data-feather="globe"></i>

                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="px-2 py-10 text-gray-400 font-semibold">
                    <p>
                      sidhfuisdfhsdiuofhsdiufhsdiofhdshfsidfhdsifhdsihfidshfidshfidshfi
                        dsfhisdfhdsifhsdifhsdifhsdifhsdifhssdfdsfdsfdsfdsfsdfsdfdsffffffffgfgfgfgfgfgfgfgfgfgfgfgfgfggfgfgfgfggfg
                        fdsfdsfdsfdsfdsfidfhdsifhidshfidshfdishfisdfhdsifhidshfdsifhidshfdsifhdsifh dsfhisdfhdsifhsdifhsdifhsdifhsdifhssdfdsfdsfdsfdsfsdfsdfdsffffffffgfgfgfgfgfgfgfgfgfgfgfgfgfggfgfgfgfggfg
                        dsfhisdfhdsifhsdifhsdifhsdifhsdifhssdfdsfdsfdsfdsfsdfsdfdsffffffffgfgfgfgfgfgfgfgfgfgfgfgfgfggfgfgfgfggfg

                        dsifhsdifhsdifhsdfdsfsdfdsfdsfdsfdsfdsfdsfds
                    </p>

                    <div class="mt-12">
                        <a href="{{ $game['trailer'] }}">
                            <button
                                class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-400 rounded transition ease-in-out duration-150">
                                <i data-feather="play"></i>
                                <span class="mr-2">Play Trailer</span>
                            </button>
                        </a>

                    </div>
                </div>


            </div>

        </div> <!-- end of games details -->

        <div class="images-container border-b border-gray-800 mt-8 pb-12">
            <h2 class="font-semibold text-4xl">
                Final Fantacy
            </h2>
            <div class="grid grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="">
                        <img src="https://media.playstation.com/is/image/SCEA/marvels-avengers-screenshot-05-ps4-06feb20-en-us?$native_nt$" alt=""class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                </div>
                <div>
                    <a href="">
                        <img src="https://media.playstation.com/is/image/SCEA/marvels-avengers-screenshot-05-ps4-06feb20-en-us?$native_nt$" alt=""class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                </div>
                <div>
                    <a href="">
                        <img src="https://media.playstation.com/is/image/SCEA/marvels-avengers-screenshot-05-ps4-06feb20-en-us?$native_nt$" alt=""class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                </div>
                <div>
                    <a href="">
                        <img src="https://media.playstation.com/is/image/SCEA/marvels-avengers-screenshot-05-ps4-06feb20-en-us?$native_nt$" alt=""class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                </div>
                <div>
                    <a href="">
                        <img src="https://media.playstation.com/is/image/SCEA/marvels-avengers-screenshot-05-ps4-06feb20-en-us?$native_nt$" alt=""class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                </div>
                <div>
                    <a href="">
                        <img src="https://media.playstation.com/is/image/SCEA/marvels-avengers-screenshot-05-ps4-06feb20-en-us?$native_nt$" alt=""class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                </div>
                <div>
                    <a href="">
                        <img src="https://media.playstation.com/is/image/SCEA/marvels-avengers-screenshot-05-ps4-06feb20-en-us?$native_nt$" alt=""class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                </div>
            </div>

        </div> <!-- end of images container -->

        <div class="similar-game-conttainer mt-12">
            <h1 class="tracking-wide text-blue-500 font-semibold uppercase">
                similar games
            </h1>
            <div class="populate-games grid grid-cols-6 gap-4 border-b border-gray-400">
                <div class="game my-8 ">
                    <div class="relative inline-block">
                        <a href="">
                            <img src="https://images.pushsquare.com/5b8970d9066c2/the-standard-cover-isnt-too-bad.large.jpg" alt="game cover" class="hover:opacity-75 transition duration-150 ease-in-out ">
                        </a>

                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                            <div class="flex justify-center items-center h-full font-semibold text-xs ">
                                99%
                            </div>
                        </div>

                    </div>
                    <a href="#" class="block text-base leading-tight font-semibold hover:text-gray-400 mt-8">
                        Final fantacy remake
                    </a>
                    <div class="text-gray-400 mt-1"> Playstation</div>
                </div>
        </div>

    </div>
@endsection
