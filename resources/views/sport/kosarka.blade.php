@extends('app')

@section('content')
    <div class="container">
        <h1 class="text-center">Košarka</h1><hr>
        @foreach($kosarka as $kos)
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="../resources/images/img1.jpg" alt="..." width="200px">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$kos->title}}</h4>
                    <p class="media-heading" > {{$kos->news}}</p>
                </div>
            </div><br><hr>
        @endforeach
    </div>
@stop