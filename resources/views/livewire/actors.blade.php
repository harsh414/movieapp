<div class="actors">
    <div class="flex justify-center mb-4 mt-4">
        @if($page!=1)
            <button wire:click.prevent="decrementPage" class="bg-gray-300 flex items-center hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                <img src="https://image.flaticon.com/icons/png/128/271/271220.png" class="w-4 h-4 mr-1" alt="<<"> Prev
            </button>
        @endif
        @if($page!=500)
            <button wire:click.prevent="incrementPage" class="flex items-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                Next <img src="https://image.flaticon.com/icons/png/128/271/271228.png" class="w-4 h-4 ml-1" alt=">>">
            </button>
        @endif
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
        @foreach($actors as $actor)
            <div class="actor mt-8">
                <a href="{{route('actors.description',$actor['id'])}}">
                    @if($actor['profile_path']!=null)
                        <img src="{{'https://image.tmdb.org/t/p/w500'.$actor['profile_path']}}" alt="" class="hover:opacity-75 transition ease-in-out ">
                    @else
                        <img src="{{'https://ui-avatars.com/api/?size=235$name='.$actor['name']}}" alt="" class="hover:opacity-75 transition ease-in-out ">
                    @endif
                </a>
                <div class="mt-2">
                    <a href="{{route('actors.description',$actor['id'])}}" class="mt-2 hover:text-gray-300 text-sm">{{$actor['name']}}</a>
                    <div class="text-sm text-gray-400">
                    @foreach($actor['known_for'] as $didMovie)
                        @if(isset($didMovie['title']))
                            {{$didMovie['title']}} <!-- if movie -->
                        @else
                            {{$didMovie['name']}} <!-- if tv show -->
                            @endif
                            @if(!$loop->last), @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center mt-12">
        @if($page!=1)
            <button wire:click.prevent="decrementPage" class="bg-gray-300 flex items-center hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                <img src="https://image.flaticon.com/icons/png/128/271/271220.png" class="w-4 h-4 mr-1" alt="<<"> Prev
            </button>
        @endif
        @if($page!=500)
            <button wire:click.prevent="incrementPage" class="flex items-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                Next <img src="https://image.flaticon.com/icons/png/128/271/271228.png" class="w-4 h-4 ml-1" alt=">>">
            </button>
        @endif
    </div>
</div>

{{--<div class="flex justify-center">--}}
{{--    <a wire:click.prevent="incrementPage" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">--}}
{{--        << Prev--}}
{{--    </a>--}}
{{--    <a wire:click.prevent="decrementPage" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">--}}
{{--        Next>>--}}
{{--    </a>--}}
{{--</div>--}}
