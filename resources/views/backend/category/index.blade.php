@extends('backend.layout.layout')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Category Name</th>
            <th>Slug</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

@foreach($category as $categories)

        <tr id="slide">
            <td id="post-{{$categories->id}}">{{$categories->title}}</td>
            <td>{{$categories->slug}}</td>
            <td><a class="btn btn-warning btn-xs" href="{{route('admin.category.edit',$categories->id)}}">
                    <i class='glyphicon glyphicon-pencil'></i> Edit
                </a></td>
            <td>
                <?php

                ?>

                    {!!  Form::open(array('route' => array('admin.category.destroy',$categories->id),'method'=>'delete','data-remote'))  !!}
<div class="form-group">
                    {!! Form::submit('delete',['class'=>'btn btn-primary btn-xs','data-confirm'=>'do you really want to do delete ?']) !!}
</div>
                {!!  Form::close()  !!}

            </td>

        </tr>
@endforeach
        </tbody>
    </table>


@stop