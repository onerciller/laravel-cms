@extends('backend.layout.layout')
@section('content')
    <table class="table table-bordered table-highlight  table-hover">
        <thead>
        <tr>
            <th>Blog</th>

            <th>Author</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete
            <th>Status</th>
        </tr>
        </thead>
        <tbody>

        @foreach($post as $posts)

            <tr>
                <td><a href="{{URL::route('admin.page.edit',$posts->id)}}">{{$posts->title}}</a> </td>
                <td>{{$posts->user->username}}</td>
                <td>{{$posts->created_at->format('Y-m-d')}}</td>
                <td><a class="btn btn-warning btn-xs" href="{{URL::route('admin.page.edit',$posts->id)}}">
                        <i class='glyphicon glyphicon-pencil'></i> Edit
                    </a></td>
                <td>
                    {!! Form::open(array('route' => array('admin.page.destroy',$posts->id),'method'=>'delete')) !!}
                    <button type="submit" class="btn btn-xs btn-primary"><i class='glyphicon glyphicon-remove'></i> Delete</button>
                    {!! Form::close() !!}

                </td>
                <td>
                    @if($posts->is_published ==true)<span class="label label-success">Published</span>@else<span class="label label-primary">draft</span>@endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop