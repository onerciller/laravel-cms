@extends('backend.layout.layout')
@section('content')


    {!! Form::open(array("method"=>"post",'route'=>'admin.blog.store')) !!}
    <div class="form-group">
        {!! Form::label('title','ADD NEW POSTS') !!}
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter title here..']) !!}
    </div>

    <div class="form-group">
            <label for="select-input">CATEGORIES</label>
            <select name="category" class="form-control">
                @foreach($category as $categories)
                <option value="{{$categories->id}}">{{$categories->title}} </option>
                @endforeach
            </select>
    </div>


<div class="form-group">
    <textarea class="ckeditor" cols="100" id="editor1" name="post" rows="10" style="visibility: hidden; display: none;"></textarea>

</div>



    <div class="form-group">
    {!! Form::label('tag','ADD TAG') !!}
    {!! Form::text('tag',null,['class'=>'form-control','placeholder'=>'Enter Tag here..']) !!}
    </div>
  <!--Add Post Form Input -->
  <div class="form-group">
  {!! Form::submit('Add Post',['class'=>'btn btn-success btn-lg']) !!}
  </div>
    {!! Form::token() !!}

    {!! Form::close() !!}

    </div>
    </div>

@stop