@extends('layouts.app')

@section('content')

    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy
                    VII Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Animal
                    Crossing: New Horizons</a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom
                    Eternal</a>
                <div class="text-gray-400 mt-1">Playstation 4, PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Half Life:
                    Alyx</a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Luigi's Mansion
                    3</a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Resident Evil
                    3</a>
                <div class="text-gray-400 mt-1">PC, Playstation 4, XBox One X</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Resident Evil
                    3</a>
                <div class="text-gray-400 mt-1">PC, Playstation 4, XBox One X</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Luigi's Mansion
                    3</a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Half Life:
                    Alyx</a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom
                    Eternal</a>
                <div class="text-gray-400 mt-1">Playstation 4, PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Animal
                    Crossing: New Horizons</a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                         style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy
                    VII Remake</a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
        </div> <!-- end popular-games -->

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently reviewed</h2>
                <div class="recentrly-reviwed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="">
                                <img src="ff7.jpg" alt="game cover"
                                     class="w-20 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                 style="right:-20px; bottom:-20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href="" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy 7 Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur autem beatae
                                dignissimos dolores eos nobis placeat sint velit voluptatem! Amet dolore maxime nostrum
                                repudiandae.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="">
                                <img src="ff7.jpg" alt="game cover"
                                     class="w-20 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                 style="right:-20px; bottom:-20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href="" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy 7 Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque debitis doloremque
                                eveniet harum ipsa iste labore neque nobis non nulla quae ratione, repudiandae sed
                                similique?
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="">
                                <img src="ff7.jpg" alt="game cover"
                                     class="w-20 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                 style="right:-20px; bottom:-20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-6 lg:ml-12">
                            <a href="" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy 7 Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet
                                architecto asperiores assumenda beatae commodi, consequatur debitis delectus fuga fugit
                                harum iure iusto modi obcaecati, perspiciatis quaerat quasi similique sint tempore
                                voluptatem voluptates voluptatum? Consequatur eligendi ipsum iste iusto magnam
                                necessitatibus perspiciatis qui ratione sed, similique ullam velit voluptatibus.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex mt-6">
                        <a href="">
                            <img src="ff7.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover.text-gray-300">Final Fantasy</a>
                            <div class="text-gray-400 text-sm mt-1">16 sept, 2020</div>
                        </div>
                    </div>
                    <div class="game flex mt-6">
                        <a href="">
                            <img src="ff7.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover.text-gray-300">Final Fantasy</a>
                            <div class="text-gray-400 text-sm mt-1">16 sept, 2020</div>
                        </div>
                    </div>
                    <div class="game flex mt-6">
                        <a href="">
                            <img src="ff7.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover.text-gray-300">Final Fantasy</a>
                            <div class="text-gray-400 text-sm mt-1">16 sept, 2020</div>
                        </div>
                    </div>
                    <div class="game flex mt-6">
                        <a href="">
                            <img src="ff7.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover.text-gray-300">Final Fantasy</a>
                            <div class="text-gray-400 text-sm mt-1">16 sept, 2020</div>
                        </div>
                    </div>
                </div>


                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-24">Coming Soon</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex mt-6">
                        <a href="">
                            <img src="ff7.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover.text-gray-300">Final Fantasy</a>
                            <div class="text-gray-400 text-sm mt-1">16 sept, 2020</div>
                        </div>
                    </div>
                    <div class="game flex mt-6">
                        <a href="">
                            <img src="ff7.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover.text-gray-300">Final Fantasy</a>
                            <div class="text-gray-400 text-sm mt-1">16 sept, 2020</div>
                        </div>
                    </div>
                    <div class="game flex mt-6">
                        <a href="">
                            <img src="ff7.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover.text-gray-300">Final Fantasy</a>
                            <div class="text-gray-400 text-sm mt-1">16 sept, 2020</div>
                        </div>
                    </div>
                    <div class="game flex mt-6">
                        <a href="">
                            <img src="ff7.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover.text-gray-300">Final Fantasy</a>
                            <div class="text-gray-400 text-sm mt-1">16 sept, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection