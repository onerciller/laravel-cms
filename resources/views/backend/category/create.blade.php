@extends('backend.layout.layout')

@section('content')

    <div class='col-md-6'>

    {!! Form::open(array('method'=>'POST','route'=>'admin.category.store')) !!}

    <div class="form-group">
        {!! Form::label('title','ADD NEW CATEGORY') !!}
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter Category here..']) !!}
        {!! $errors->first('title', '<span class="error">:message</span>' ) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('ADD CATEGORY',['class'=>'btn btn-success btn-lg']) !!}
    </div>

    {!! Form::token() !!}

     {!! Form::close() !!}
    </div>


@stop