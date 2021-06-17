<div class="mt-8">
    <a href="{{route('tvShow.show',$tvShow['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$tvShow['poster_path']}}" alt="" class="hover:opacity-75 transition ease-in-out ">
    </a>
    <div class="mt-2">
        <a href="{{route('tvShow.show',$tvShow['id'])}}" class="mt-2 hover:text-gray-300 text-sm">{{$tvShow['name']}}</a>
        <div class="flex items-center text-gray-400 mt-1">
            <img src="https://img.icons8.com/emoji/2x/star-emoji.png" class="w-4 h-4" alt="">
            <span class="ml-1">{{$tvShow['vote_average']*10}}%</span>
            <span class="ml-1">|</span>
            <span class="ml-1">{{\Carbon\Carbon::parse(($tvShow['first_air_date']))->format('M d,Y')}}</span>
        </div>
        <div class="text-gray-300 text-sm">  <!--tags-->
            @foreach($tvShow['genre_ids'] as $id)
                {{($genres->get($id))}}
                @if(!$loop->last && $genres->get($id)!=''),@endif
            @endforeach
        </div>
    </div>
</div>

