@extends('app')

@section('content')

    <div class="container">
        <h1 class="text-center">Film</h1><hr>
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
            <h1 class="text-center">Trenutno nemamo vesti za sekciju film</h1>
        @endif
    </div>
@stop
