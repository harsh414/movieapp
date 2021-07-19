<div class="mt-8">
    <a href="{{route('movies.show',$movie['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="" class="hover:opacity-75 transition ease-in-out ">
    </a>
    <div class="mt-2">
        <a href="{{route('movies.show',$movie['id'])}}" class="mt-2 hover:text-gray-300 text-sm">{{$movie['title']}}</a>
        <div class="flex items-center text-gray-400 mt-1">
            <img src="https://img.icons8.com/emoji/2x/star-emoji.png" class="w-4 h-4" alt="">
            <span class="ml-1">{{$movie['vote_average']*10}}%</span>
            <span class="ml-1">|</span>
            @if(array_key_exists("release_date",$movie))
            <span class="ml-1">{{\Carbon\Carbon::parse(($movie['release_date']))->format('M d,Y')}}</span>
            @endif
        </div>
        <div class="text-gray-300 text-sm">  <!--tags-->
            @foreach($movie['genre_ids'] as $id)
                {{($genres->get($id))}}
                @if(!$loop->last),@endif
            @endforeach
        </div>
    </div>
</div>

