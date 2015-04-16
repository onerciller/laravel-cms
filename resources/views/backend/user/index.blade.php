@extends('backend.layout.layout')
@section('content')
    <div class="portlet portlet-table">
        <div class="portlet-header">

            <h3>
                <i class="fa fa-group"></i>
                Recent Signups
            </h3>
            <ul class="portlet-tools pull-right">
                <li>
                    <a  href="{{route('admin.user.create')}}" class="btn btn-sm btn-default">Add User</a>
                </li>
            </ul>

            <div class="portlet-content">


            <div class="table-responsive">

                <table id="user-signups" class="table table-striped table-bordered table-checkable">
                    <thead>
                    <tr>

                        <th class="hidden-xs">Username</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th class="text-center" style="width: 90px">Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($user as $users)
                    <tr>


                        <td class="hidden-xs">{{$users->username}}</td>
                        <td>{{$users->email}}</td>
                        <td><span class="label label-success">@if($users->is_role==1) Administrator @else Standart User @endif</span></td>
                        <td class="text-center"><span class="label label-success">
                            @if($users->is_active==true) published </span> @else <span class="label label-default">pending</span> @endif </td>
                        <td><a class="btn btn-warning btn-xs" href="{{route('admin.user.edit',$users->id)}}">
                                <i class='glyphicon glyphicon-pencil'></i> Edit
                            </a></td></td>
                        <td> {!! Form::open(array('route' => array('admin.user.destroy',$users->id),'method'=>'delete','data-remote')) !!}
                            <button type="submit" class="btn btn-xs btn-primary"><i class='glyphicon glyphicon-remove'></i> Delete</button>
                            {!! Form::close() !!}</td>
                    </tr>
                        @endforeach


                    </tbody>

                </table>


            </div> <!-- /.table-responsive -->

        </div> <!-- /.portlet-content -->

        <div class="portlet-footer">
            <div class="text-right">
                Apply to Selected: &nbsp;&nbsp;
                <div class="select2-container ui-select2" id="s2id_apply-selected" style="width: 125px"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Select Action</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="apply-selected" name="table-select" class="ui-select2 select2-offscreen" style="width: 125px" tabindex="-1">
                    <option value="">Select Action</option>
                    <option value="approve">Approve</option>
                    <option value="edit">Edit</option>
                    <option value="delete">Delete</option>

                </select>
            </div>
        </div> <!-- /.portlet-footer -->

    </div>

    </div>
    </div>


@stop