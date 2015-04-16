@extends('backend.layout.layout')
@section('content')

    {!!  Form::open(array('route' => array('admin.blog.update',$post->id),'method'=>'PUT')) !!}

    <div class="form-group">
        {!! Form::label('title','ADD NEW POSTS') !!}
        {!! Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Enter title here..'])!!}

    </div>
    <div class="form-group">
        <label for="select-input">CATEGORIES</label>
        <select name="category" class="form-control">
            @foreach($category as $categories)
                <option value="{{$categories->id}}"@if($post->category_id==$categories->id)selected @endif>{{$categories->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <textarea class="ckeditor" cols="100" id="editor1" name="post" rows="10" style="visibility: hidden; display: none;">
            {{$post->post}}
        </textarea>

    </div>

    <div class="form-group">
        {!! Form::label('tag','ADD TAG') !!}
        {!! Form::text('tag',null,['class'=>'form-control','placeholder'=>'Enter Tag here..']) !!}
    </div>
    <button type="submit" class="btn btn-success btn-lg">UPDATE</button>
    {!! Form::token()!!}

    {!! Form::close()!!}

@stop