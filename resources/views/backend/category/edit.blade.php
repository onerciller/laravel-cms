@extends('backend.layout.layout')

@section('content')


    {!!  Form::open(array('route' => array('admin.category.update',$category->id),'method'=>'PUT')) !!}


    <div class="form-group">
        {!! Form::label('title','EDIT CATEGORY') !!}
        {!! Form::text('title',$category->title,['class'=>'form-control','placeholder'=>'Enter Category here..'])!!}
        {!! $errors->first('title', '<span class="error">:message</span>' )!!}
    </div>

    <div class="form-group">
        {!! Form::submit('EDIT CATEGORY',['class'=>'btn btn-success btn-lg'])!!}
    </div>


    {!! Form::token()!!}

    {!! Form::close()!!}

@stop