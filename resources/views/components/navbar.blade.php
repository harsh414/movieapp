<nav class="border-b lg:z-40 md:fixed lg:fixed border-gray-800 mb-4" style="width: 100vw" :class="{'md:bg-black lg:bg-black ': !top}"
     @scroll.window="top= (window.pageYOffset)>30 ? false : true">
    <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-4" x-data="{nav:false}">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="{{route('movies.index')}}" class="font-bold text-lg text-white">
                    Shows&Movies
                </a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{route('movies.index')}}" class="hover:text-gray-300 hover:bg-black font-semibold bg-gray-400 w-36 rounded-full pl-2 pr-2 ">Movies</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{route('tvShows.index')}}" class="hover:text-gray-300 hover:bg-black font-semibold bg-gray-400 w-36 rounded-full pl-2 pr-2">TV Shows</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{route('actors.index')}}" class="hover:text-gray-300 hover:bg-black font-semibold bg-gray-400 w-36 rounded-full pl-2 pr-2">Actors</a>
            </li>
        </ul>
        <div class="flex flex-col md:flex-row items-center">
            <livewire:search-dropdown/>
{{--                <div class="md:ml-4 mt-3 md:mt-0">--}}
{{--                    <a href="#" class="flex flex-row items-center">--}}
{{--                        <img src="https://picsum.photos/200" alt="avatar" class="rounded-full w-8 h-8">--}}
{{--                        <div @click.prevent="nav=!nav;" @click.away.prevent="nav=false"><img src="https://img.icons8.com/plumpy/2x/expand-arrow.png" class="bg-white rounded-xl w-4 h-4 ml-2" alt=""></div>--}}
{{--                    </a>--}}
{{--                    <div class="absolute border border-gray-200 bg-gra-800 w-32 mt-4" x-show.transition.duration.1000="nav">--}}
{{--                        <ul>--}}
{{--                            @auth--}}
{{--                                <li class="border-b border-gray-500 bg-gray-100">--}}
{{--                                    {{auth()->user()->name}}--}}
{{--                               </li>--}}
{{--                            @else--}}
{{--                                <li class="border-b border-gray-500 bg-gray-500 text-black text-center m-2">--}}
{{--                                    <a href="{{ route('register') }}" class="ml-1 tracking-wider">--}}
{{--                                        SignUp--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="border-b border-gray-500 bg-gray-300 text-black text-center">--}}
{{--                                    <a href="{{ route('login') }}" class="ml-1 tracking-wider">--}}
{{--                                        Login--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endauth--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
        </div>
    </div>
</nav>
