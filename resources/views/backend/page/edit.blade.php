@extends('backend.layout.layout')
@section('content')

    {!! Form::open(array('route' => array('admin.page.update',$post->id),'method'=>'PUT')) !!}
    <div class="form-group">
        {!!Form::label('title','ADD NEW PAGE')!!}
        {!!Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Enter title here..'])!!}
        {!!$errors->first('title', '<span class="error">:message</span>' )!!}
    </div>


    <div class="form-group">
        <textarea class="ckeditor" cols="100" id="editor1" name="post" rows="10" style="visibility: hidden; display: none;">
            {!!$post->post !!}
        </textarea>

    </div>

    <div class="form-group">
        {!!Form::label('tag','ADD TAG')!!}
        {!!Form::text('tag',null,['class'=>'form-control','placeholder'=>'Enter Tag here..'])!!}
    </div>
    <button type="submit" class="btn btn-success btn-lg">UPDATE</button>
     {!!Form::token()!!}

     {!!Form::close()!!}

@stop