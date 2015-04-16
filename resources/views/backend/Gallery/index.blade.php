@extends('backend.layout.layout')
@section('content')
    <h4 class="heading">Gallery</h4>
    <div class="row">

        <div class="col-md-12">

            <div class="table-responsive">

                <table class="table table-striped table-bordered media-table">
                    <thead>
                    <tr>
                        <th style="width: 150px">Image</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>File info</th>
                        <th class="text-center">Actions</th>
                        <th>Path</th>
                    </tr>
                    </thead>

                    <tbody>
@foreach($gallery as $galleries)
                    <tr>
                        <td>
                            <div class="thumbnail">
                                <div class="thumbnail-view">
                                    <a class="thumbnail-view-hover ui-lightbox" href="{{URL::to('backend/uploads/'.$galleries->file_name.'')}}">
                                    </a>

                                    <img class="demo-img" src="{{URL::to('backend/uploads/'.$galleries->file_name.'')}}" height="80" width="125" alt="Gallery Image">
                                </div>
                            </div> <!-- /.thumbnail -->
                        </td>

                        <td><a href="javascript:;" title="{{$galleries->title}}">{{$galleries->title}}</a>
                            <p>{{$galleries->description}}.</p>
                        </td>
                        <td>{{$galleries->created_at}}</td>
                        <td class="file-info">
                            <span><strong>Size:</strong>{{$galleries->file_size}}</span> <br>
                            <span><strong>Format:</strong>{{$galleries->type}}</span> <br>
                        </td>
                        <td>
                            <ul>
                                <li class="gallery-action"> <a  class="ui-lightbox" class="btn btn-primary btn-xs pull-left" href="{{URL::route('admin.gallery.edit',$galleries->id)}}">
                                        <i class='glyphicon glyphicon-pencil'></i></a></li>
                                <li CLASS="gallery-action">{!! Form::open(array('route' => array('admin.gallery.destroy',$galleries->id),'method'=>'delete')) !!}
                                    <button class="btn btn-xs btn-secondary pull-left"><i class="fa fa-times"></i></button>
                                    {!! Form::close() !!}</li>
                            </ul>


                        </td>
                        <td><input style="width:280px;" type="text" value="{{URL::to('backend/uploads/'.$galleries->file_name.'')}}"readonly/></td>
                    </tr>
@endforeach


                    </tbody>
                </table>

            </div> <!-- /.table-responsive -->


        </div> <!-- /.col -->

    </div>
    <style>
        li.gallery-action{list-style: none;float:left;padding:5px 5px;}
    </style>

@stop
