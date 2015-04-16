@extends('backend.layout.layout')
@section('content')



    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; margin-top:50px;}
        #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 50px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }
    </style>

    <a  class="btn btn-success pull-right" href="{{URL::route('admin.menu.create')}}">Add New Menu</a>





        <ul id="sortable">
@foreach($menu as $menus)
                <li id="set_{{$menus->id}}" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
{{$menus->title}}

                    {!!  Form::open(array('route' => array('admin.menu.destroy',$menus->id),'method'=>'delete','data-remote'))  !!}
                    <div class="form-group">
                        {!!Form::submit('delete',['class'=>'btn btn-primary btn-xs pull-right onr-menu','data-confirm'=>'do you really want to do delete ?'])!!}
                    </div>
                    {!! Form::token() !!}
                   {!! Form::close() !!}
@endforeach

                </li>


        </ul>

    <div class="alert alert-success alert-mess">Saved Menu New Order !!</div>


@stop

@section('script')
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".alert-mess").hide();
            $("#sortable").sortable({
                update : function(event, ui){
                    var token = $("#csrf-token").val();
                    var data =  $(this).sortable('serialize');
                    $.ajax({
                        "_token": "{{ csrf_token() }}",
                        type: 'POST',
                        url: "{{ URL::to('/admin/menu/0')}}",
                        data: "_method=put&"+data,
                        success:function(){

                            $(".alert-mess").show().delay(800).fadeOut(500);

                        }
                    });

                }


            });
            $("#sortable").disableSelection();
        });//ready

    </script>
    <style>.onr-menu{position: relative;top:-30px;}</style>
    @stop

