

@extends('app')
@section('head')

    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">



@stop
@section('content')
   @if($celaVest)
       <div class="container">
         <h3>{{$celaVest->title}}</h3><hr>
           <img src="../../resources/images/img1.jpg" class="img-responsive" width="700px">
           <p>...</p>
           <h4>{{$celaVest->news}}</h4>
           {{$celaVest->img}}
           <h4><strong>Objavljeno: </strong><br>{{$celaVest->created_at}}</h4>
           <a href="{{url('/pocetna')}}">Povratak</a>
        </div>
    @endif

@stop
