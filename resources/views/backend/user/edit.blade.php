@extends('backend.layout.layout')
@section('content')

    {!!Form::open(array('route' => array('admin.user.update',$user->id),'enctype'=>'multipart/form-data','method'=>'PUT'))!!}


    <div class="form-group">
        {!!Form::label('username','ADD NEW USER')!!}
        {!!Form::text('username',$user->username,['class'=>'form-control','placeholder'=>'Enter username here..'])!!}
        {!!$errors->first('username', '<span class="error">:message</span>' )!!}
    </div>
    <div class="form-group">
        {!!Form::label('password','UPDATE PASSWORD')!!}
        {!!Form::text('password','',['class'=>'form-control'])!!}
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
                    <input type="file" name="profil">
                  </span>
        </div>

        <div class="form-group">
            {!!Form::label('email','EMAIL')!!}
            {!!Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'Enter email here..'])!!}
            {!!$errors->first('email', '<span class="error">:message</span>' )!!}
        </div>

        <div class="form-group">
            <label for="select-input">SELECT USER TYPE</label>
            <select name="is_role" class="form-control">
                <option value="1">Administrator</option>
                <option value="2">Standart User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success btn-lg">ADD USER</button>
        {!!Form::token()!!}

        {!!Form::close()!!}

@stop