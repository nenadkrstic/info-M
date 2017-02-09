@extends('app')

@section('content')

    <div class="container">
        <h1 class="text-center">Pretraga po ključnoj reči : <strong>{{ $pretraga}}</strong></h1><hr>
        @if(isset($vest))
            @foreach($vest as $v)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-thumbnail" src="../resources/images/img1.jpg" alt="..." width="200px">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$v->title}}</h4><hr>
                        <p class="media-heading" > {{$v->news}}</p>
                        <p><strong>Objavljeno: </strong>{{$v->created_at}}</p>
                    </div>
                </div><br><hr>
            @endforeach
        @else
            <h1 class="text-center">Trenutno nemamo vesti za sekciju Srbija</h1>
        @endif
    </div>
@stop
