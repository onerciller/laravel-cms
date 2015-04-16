@extends('backend.layout.layout')
@section('content')

    {!!Form::open(array('method'=>'POST','route'=>'admin.menu.store'))!!}
    <!--title Form Input -->
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <!--url Form Input -->
    <div class="form-group">
        {!! Form::label('url','Url:') !!}
        {!!  Form::text('url',null,['class'=>'form-control']) !!}
    </div>

    <!--Add Menu Form Input -->
    <div class="form-group">
        {!! Form::submit('Add Menu',['class'=>'btn btn-success form-control']) !!}
    </div>


    {!!Form::close()!!}

    <ul class="aler alert-danger">
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach

    </ul>
@stop