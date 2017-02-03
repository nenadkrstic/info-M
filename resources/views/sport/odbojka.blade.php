@extends('app')

@section('content')
    <div class="container">
        <h1 class="text-center">Odbojka</h1>
        @if(isset($odbojka))
            @foreach($odbojka as $odb)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="../resources/images/img1.jpg" alt="..." width="200px">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$odb->title}}</h4>
                        <p class="media-heading" > {{$odb->news}}</p>
                    </div>
                </div><br><hr>
            @endforeach
        @else
            <h1 class="text-center">Trenutno nemamo vesti za sekciju odbojka</h1>
        @endif
    </div>
@stop