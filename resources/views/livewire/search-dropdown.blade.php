<div class="relative mt-3 md:mt-0">
    <input wire:model="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none text-sm" placeholder="Search....">
    <div class="absolute top-0 ml-2 pt-2">
        <img src="https://image.flaticon.com/icons/png/128/482/482631.png" class="w-4 h-4" alt="">
    </div>

    @if(strlen($search)>=2)
        <div class="absolute bg-gra-800 w-64 mt-4">
            @if(count($searchResult) >0)
                <ul class="bg-gray-600">
                    @foreach($searchResult as $result)
                        <li class="border border-b border-gray-800">
                            <a href="{{route('movies.show',$result['id'])}}" class="block hover:bg-black flex flex-row px-3 py-3">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$result['poster_path']}}" class="rounded-full w-10 h-10">
                                <span class="ml-3 mt-1">{{$result['title']}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="border border-gray-600 mt-2">No results for "{{$search}}"</div>
            @endif
        </div>
    @endif
</div>
