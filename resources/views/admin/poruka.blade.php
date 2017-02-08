@extends('admin.admin_app')

@section('ubaci_vest')
   @if($mess)
       @foreach($mess as $m)
        <div id="mess" class="container">
           <h3>Ime:{{$m->name}}</h3>
           <h4>Poruka:{{$m->message}}</h4>
        </div>
       @endforeach
    @endif
    @stop