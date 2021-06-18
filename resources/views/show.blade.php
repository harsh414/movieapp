@extends('layouts.app')
@section('content')
    <div class="movie-info border-b border-gray-800 pt-16">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24" x-data="{isOpen:false}">
                <a href="" class="text-lg mt-2 hover:text-gray-300">{{$movie['title']}}</a>
                <div class="flex items-center text-gray-400 mt-1">
                    <img src="https://img.icons8.com/emoji/2x/star-emoji.png" class="w-4 h-4" alt="">
                    <span class="ml-1">{{$movie['vote_average']*10}}%</span>
                    <span class="ml-1">|</span>
                    <span class="ml-1">{{\Carbon\Carbon::parse(($movie['release_date']))->format('M d,Y')}}</span>
                </div>
                <p class="text-gray-300 mt-8">
                    @foreach($movie['genres'] as $genre)
                        {{$genre['name']}}@if(!$loop->last),@endif
                    @endforeach
                </p>

                <p class="mt-8 text-gray-300">
                    {{$movie['overview']}}
                </p>

                <div class="mt-12">
                    <h4 class="text-white text-sm font-semibold bg-gray-400 w-28 rounded-full pl-2 pr-2">Featured Crew</h4>
                    <div class="flex flex-wrap mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            <div class="mr-14">
                                @if($loop->index < 4)
                                    <div>{{$crew['name']}}</div>
                                    <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-12">
                    @if(count($movie['videos']['results']))
                        <a href="https://www.youtube.com/watch?v={{$movie['videos']['results']['0']['key']}}" target="_blank" class="flex items-center bg-gray-400 text-gray-900 rounded font-semibold px-5 py-4
                        hover:bg-yellow-500 transition ease-in-out duration-150" @click.prevent="isOpen=true">
                            <img src="https://image.flaticon.com/icons/png/128/727/727245.png" class="w-4 h-4 alt=''">
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    @endif
                </div>
                <div x-show="isOpen">
                    <div style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button
                                        @click="isOpen = false"
                                        @keydown.escape.window="isOpen = false"
                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                        <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--end movie info -->

    <div class="review border-b border-gray-800">
        <div class="container mx-auto  mt-2">
            <h6 class="text-3xl font-semibold bg-gray-400 w-36 rounded-full pl-2 pr-2">Reviews</h6>
            @if(count($movie['reviews']['results']))
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 sm:gap-8 md:gap-16 mt-4 mb-1">
                    @foreach($movie['reviews']['results'] as $review)
                        @if($loop->index<6)
                            <div class="flex flex-col mt-3 mx-6 sm:mx-6 md:mx-2 gap-1">
                                <h6 class="text-yellow-300 font-semibold ">Author: {{$review['author']}}</h6>
                                <a href="{{$review['url']}}" class="underline text-blue-300">Read here</a>
                                <div class="text-yellow-300 font-semibold text-sm">
                                    Review Date: {{\Carbon\Carbon::parse(explode("T", $review['created_at'])[0])->format('D M,Y')}}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @else
                <div class="text-yellow-300 text-lg font-semibold mt-3">No reviews found</div>
            @endif
        </div>
    </div>

    <!--caste begins here -->
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h5 class="text-3xl text-center font-semibold bg-gray-400 w-24 rounded-full pl-1 pr-1">Cast</h5>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @foreach($movie['credits']['cast'] as $cast)
                    @if($loop->index <10)
                        <div class="mt-8">
                            <a href="{{route('actors.description',$cast['id'])}}">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}" alt="" class="hover:opacity-75 transition ease-in-out ">
                            </a>
                            <div class="mt-2">
                                <a href="{{route('actors.description',$cast['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{$cast['original_name']}}</a>
                                <div class="text-gray-300 text-sm">  <!--tags-->
                                    {{$cast['character']}}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    <!--caste ends here -->

    <!--images section -->
    <div class="movieImages border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h5 class="text-3xl text-center font-semibold bg-gray-400 w-32 rounded-full pl-1 pr-1 pb-1">Images</h5>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @foreach($movie['images']['backdrops'] as $image)
                    @if($loop->index <10)
                        <div class="mt-8">
                            <a href="">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}" alt="" class="hover:opacity-75 transition ease-in-out ">
                            </a>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

@endsection
