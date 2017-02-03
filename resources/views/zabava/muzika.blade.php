@extends('app')

@section('content')

    <div class="container">
        <h1 class="text-center">Muzika</h1><hr>
        @if(isset($fudbal))
            @foreach($fudbal as $fud)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-thumbnail" src="../resources/images/img1.jpg" alt="..." width="200px">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$fud->title}}</h4><hr>
                        <p class="media-heading" > {{$fud->news}}</p>
                        <p><strong>Objavljeno: </strong>{{$fud->created_at}}</p>
                    </div>
                </div><br><hr>
            @endforeach
        @else
            Fiddle with the code

            <script type="text/javascript">
                $(document).ready(function(){
                    $("#jquery_jplayer_1").jPlayer({
                        ready: function () {
                            $(this).jPlayer("setMedia", {
                                m4a: "/media/mysound.mp4",
                                oga: "/media/mysound.ogg"
                            });
                        },
                        swfPath: "/js",
                        supplied: "m4a, oga"
                    });
                });
            </script>
            <div id="jquery_jplayer_1"></div>
            <div id="jp_container_1">
                <a href="#" class="jp-play">Play</a>
                <a href="#" class="jp-pause">Pause</a>
            </div>
        @endif
    </div>
@stop
