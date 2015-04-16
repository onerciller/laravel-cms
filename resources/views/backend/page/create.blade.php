@extends('backend.layout.layout')
@section('content')

    {!!Form::open(array("method"=>"post",'route'=>'admin.page.store'))!!}


    <div class="form-group">
        {!!Form::label('title','ADD NEW PAGE')!!}
        {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter title here..'])!!}
        {!!$errors->first('title', '<span class="error">:message</span>' )!!}
    </div>

    <div class="form-group">
        <textarea class="ckeditor" cols="100" id="editor1" name="post" rows="10" style="visibility: hidden; display: none;"></textarea>

    </div>

    <button type="submit" class="btn btn-success btn-lg">ADD PAGE</button>
    {!!Form::token()!!}

    {!!Form::close()!!}

@stop