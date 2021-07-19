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

        </div>
    </div>
</nav>
