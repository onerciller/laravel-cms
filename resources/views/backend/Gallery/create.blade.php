@extends('backend.layout.layout')
@section('content')
    <div class="content-container">
        <div class="content-header">
            <h2 class="content-header-title">ADD GALLERY</h2>

            {!!Form::open(array("method"=>"post",'route'=>'admin.gallery.store','enctype'=>'multipart/form-data'))!!}
<div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" name="gsllery">
    <div class="input-group">
        <div class="form-control">
            <i class="fa fa-file fileupload-exists"></i> <span class="fileupload-preview"></span>
        </div>
        <div class="input-group-btn">
            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                    <span class="btn btn-default btn-file">
                      <span class="fileupload-new">Select file</span>
                      <span class="fileupload-exists">Change</span>
                      <input type="file" name="gallery">
                    </span>
    </div>
</div>
    </div>
            <div class="form-group">
                {!!Form::label('title')!!}
                {!!Form::text('title',null,['id'=>'as-ex-1','class'=>'form-control','placeholder'=>'Enter photo title here..'])!!}
            </div>

            <div class="form-group">
                {!!Form::label('description','Description :')!!}
                {!!Form::textarea('description',null,['class'=>'form-control'])!!}

            </div>
    </div>
    </div>

    <button type="submit" class="btn btn-success btn-lg pull-right">ADD FILES</button>
    {!!Form::token()!!}
    {!!Form::close()!!}
@stop
