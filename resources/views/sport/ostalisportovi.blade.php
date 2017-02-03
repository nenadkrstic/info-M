@extends('app')

@section('content')
    <div class="container">
        <h1 class="text-center">Ostali sportovi</h1>
        @if(isset($ostalisportovi))
            @foreach($ostalisportovi as $ostali)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class=" img-rounded" src="../resources/images/img1.jpg" alt="..." width="200px">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">{{$ostali->title}}</h4>
                        <p class="media-heading" > {{$ostali->news}}</p>
                    </div>
                </div><br><hr>
            @endforeach
        @else
            <h1 class="text-center">Trenutno nemamo vesti za sekciju ostali sportovi</h1>
        @endif
    </div>
@stop