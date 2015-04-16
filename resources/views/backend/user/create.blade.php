@extends('backend.layout.layout')
@section('content')

    {!!Form::open(array("method"=>"post",'route'=>'admin.user.store','enctype'=>'multipart/form-data'))!!}


    <div class="form-group">
        {!!Form::label('username','ADD NEW USER')!!}
        {!!Form::text('username',null,['class'=>'form-control','placeholder'=>'Enter username here..'])!!}
        {!!$errors->first('username', '<span class="error">:message</span>' )!!}
    </div>

    <div class="form-group">
    <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;">
            <img src="http://www.placehold.it/50x50/EFEFEF/AAAAAA" alt="Placeholder">
        </div>

        <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;">
        </div>
                  <span class="btn btn-default btn-file">
                    <span class="fileupload-new">Select image</span>
                    <span class="fileupload-exists">Change</span>
                    <input type="file"  name="profil">
                  </span>
       </div>

    <div class="form-group">
        {!!Form::label('email','EMAIL')!!}
        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Enter email here..'])!!}
        {!!$errors->first('email', '<span class="error">:message</span>' )!!}
    </div>

        <div class="form-group">
            {!!Form::label('password','PASSWORD')!!}
            {!!Form::text('password',null,['class'=>'form-control','placeholder'=>'Enter password here..'])!!}
            {!!$errors->first('password', '<span class="error">:message</span>' )!!}
        </div>

        <div class="form-group">
            <label for="select-input">SELECT USER TYPE</label>
            <select name="is_role" class="form-control">
                    <option value="1">Administrator</option>
                    <option value="2">Standart User</option>
            </select>
            </div>
        <div class="form-group">
            <label for="select-input">PUBLIS AND UNPUBLISH</label>
            <select name="is_active" class="form-control">
                <option value="2">Publish</option>
                <option value="0">Unpublish</option>
            </select>
        </div>
            <button type="submit" class="btn btn-success btn-lg">ADD USER</button>
    {!!Form::token()!!}

    {!!Form::close()!!}
    </div>

@stop