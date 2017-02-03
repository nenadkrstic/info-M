@extends('app')

@section('content')
    <div class="container">
        @foreach($fudbal as $fud)
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="../resources/images/img1.jpg" alt="..." width="200px">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$fud->title}}</h4>
                    <p class="media-heading" > {{$fud->news}}</p>
                </div>
            </div><br><hr>
        @endforeach
    </div>
@stop