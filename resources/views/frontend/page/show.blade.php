@extends('frontend.layout.master')
@section('content')


    <div class="container page-cont">


       <h1 class="text-center">Hakkımızda</h1>
        <p class="text-center">{!! $page->post !!}</p>

    </div>


    <style>
       .page-cont{

           padding: 50px 20px 20px 20px;
         margin-top: 40px;
           min-height:350px ;
       }

    </style>

@stop


