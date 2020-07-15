@extends('layouts.app')

@section('content')
<div class="container-fluid bg-detail p-1">
    <div class="container">
        <div class="row border-bottom">
            <div class="col border-right">
                <i class="fab fa-facebook-f p-2" style="color: antiquewhite" aria-hidden="true"></i>
                <i class="fab fa-twitter p-2" style="color: antiquewhite" aria-hidden="true"></i>
                <i class="fab fa-instagram p-2" style="color: antiquewhite" aria-hidden="true"></i>
            </div>
            <div class="col txtc">
                TG.Thaigunners@gmail.com
            </div>
            <div class="col text-right text-white p-1 mr-3 txtr">
                +6696-293-9839
            </div>
        </div>


    </div>
    <div class="container mt-5 mb-5">
        <div class="col-nm">
            <h2 class="promptb text-center text-white">
                @switch($page)
                @case("news")
                GUNNERS NEWS
                @break
                @case("columnist")
                COLUMNISTS
                @break
                @case("sportsworld")
                SPORTSWORLD
                @break
                @case("preview")
                MATCH PREVIEWS
                @break
                @endswitch
            </h2>
        </div>
    </div>



    <div class="row p-2 bg-35">
        <div class="col-sm-9 p-0 m-0 pr-2">
            <img src="{{ url('img/upload/'.$r->pic) }}" class="img-fluid" style="width: 100%">
            <h2 class="promptb text-white mt-3 mb-3">{{ $r->nm }}</h2>
            <div class="topic-news">
                <span class="badge badge-danger p-3 mt-1 mb-1">
                    <i class="far fa-eye"></i>
                    <h8>
                        @switch($page)
                        @case('news')
                        @case('preview')
                        {{$r->n_views}}
                        @break
                        @case('variety')
                        @case("sportsworld")
                        {{$r->v_views}}
                        @break
                        @case('columnist')
                        {{$r->a_views}}
                        @break
                        @default
                        @endswitch
                    </h8>
                </span>

                <span class="badge badge-success p-3 mt-1 mb-1">
                    <i class="far fa-clock"></i>
                    <h8>
                        @switch($page)
                        @case('news')
                        @case("preview")
                        {{$r->n_date}}
                        @break
                        @case('variety')
                        @case("sportsworld")
                        {{$r->v_date}}
                        @break
                        @case('columnist')
                        {{$r->a_date}}
                        @break
                        @default
                        @endswitch
                    </h8>
                </span>

                <span class="badge badge-primary p-3 mt-1 mb-1 float-right">Share</span>
            </div>
            <div class="col-sm mt-4 mb-4 p-0 text-white nde">
                <p class="promptl text-white text-lg">{!! $r->de !!}</p>
            </div>
            <div class="topic-news">
                <h5 class="promptb text-white text-center mt-3 mb-3">ติดต่อโฆษณา : TG.Thaigunners@gmail.com PHONE : 096
                    443 2589</h5>
            </div>


            <div class="col-sm bg-white p-0 mt-2">
                <div class="fb-comments" data-href="https://www.prospeedthailand.com" data-numposts="10"
                    data-width="100%" data-colorscheme="light"></div>
            </div>

        </div>



        <div class="col-sm-3 p-0 m-0 pl-1">
            <h2 class="promptb text-white p-0 m-0">HOT ISSUE</h2>
            <div class="logonews"><img src="{{url('img/newsico.jpg')}}"></div>
            <a href="{{ url($page.'/'.$r2[0]->id.'.html')}}" class="nav-link m-0 p-0">
                <img src="{{ url('img/upload/'.$r2[0]->pic) }}" class="img-rounded">
                <p class="promptb text-black p-2 bg-topic">{{$r2[0]->nm}}</p>
            </a>
            @foreach ($r3 as $r)
            <div class="row m-0 p-0 mb-1">
                <a href="{{ url($page.'/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                    <div class="col-sm m-0 p-0">
                        <div class="col-4 float-left p-0 m-0"><img src="{{ url('img/upload/'.$r->pic) }}"
                                class="img-rounded"></div>
                        <div class="col-8 float-left p-0 m-0">
                            <p class="promptl text-white p-1 text-sm mb-0 ">{{ $r->nm }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            <div class="row m-0 p-0 mb-1 mt-5"></div>


            @foreach ($r4 as $r)

            <div class="row m-0 p-0 mb-1">
                <a href="{{ url($page.'/'.$r->id.'.html')}}" class="nav-link m-0 p-0">
                    <div class="col-sm-12 p-0 m-0"><img src="{{ url('img/upload/'.$r->pic) }}" class="img-rounded">
                    </div>
                    <div class="col-sm-12 p-0 m-0">
                        <p class="promptb text-black p-3 bg-topic">{{ $r->nm }}</p>
                    </div>
                </a>
            </div>

            @endforeach


        </div>





    </div>


</div>


@endsection


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v7.0">
</script>
