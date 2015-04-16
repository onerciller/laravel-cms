@extends('backend.layout.layout')
@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>User Name</th>
            <th>Comment</th>
            <th>Date</th>
            <th>Aproach</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>


@foreach($comment as $comments )
            <tr id="slide">
                <td>{{$comments->name}}</td>
                <td>{{$comments->comment}}</td>
                <td>{{$comments->created_at->format('d.m.Y')}}</td>
                <td>@if($comments->is_active ==1)Approved @else Approve @endif</td>
                <td>

                    {{ Form::open(array('route' => array('admin.comment.destroy',$comments->id),'method'=>'delete','data-remote')) }}
                    <div class="form-group">
                        {{Form::submit('delete',['class'=>'btn btn-primary btn-xs','data-confirm'=>'do you really want to do delete ?'])}}
                    </div>
                    {{ Form::close() }}

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>


@stop