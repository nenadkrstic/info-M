
@extends('admin.admin_app')
@section('ubaci_vest')
<div class="container">
    <div class="jumbotron">
    <h2 class="text-center">Ubaci Vest</h2>
    {!! Form::open(array('url'=>'snimi_vest','method'=>'post','enctype'=>'multipart/form-data'))!!}
    <div class="form-group">
        {!! Form::label('Naslov:')!!}
        {!! Form::text('title',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('Opis:')!!}
        {!! Form::text('description',null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('Vest:')!!}
        {!! Form::textarea('news',null,['class'=>'form-control'])!!}
    </div>


    <div  class="form-group container-fluid text-center">
        <select name = "section" class="form-control" onchange="optionValue(value)">
            <option value="mladenovac">Mladenovac</option>
            <option value="info">Info</option>
            <option value="sport">Sport</option>
            <option value="zabava">Zabava</option>

        </select>
    </div>

    <div id="load"></div>
    <div class="form-group ">
        <label name="img">Ubaci sliku</label>
        <input type="file" name="img" class="btn btn-primary">

    </div>




    <div class="form-group">
        {!! Form::submit('Snimi vest',['class'=>'btn btn-primary btn-lg btn-block ']) !!}
    </div>

    {!! Form::close() !!}

    </div>
   </div>

@stop
