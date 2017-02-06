@extends('admin.admin_app')

@section('ubaci_vest')
@section('ubaci_vest')
    <div class="container">
        <div class="jumbotron">
            <h2 class="text-center">Ubaci Vest</h2>
            {!! Form::model($izmeni_vest,['method'=>'POST','action'=>['AdminController@izmeni_vest_db',$izmeni_vest->id]])!!}

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









            <div class="form-group">
                {!! Form::submit('Izmeni vest',['class'=>'btn btn-primary btn-lg btn-block ']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@stop

    @stop