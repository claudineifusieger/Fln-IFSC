@extends('layouts.pdf') 


@section('content')

       
          </br> </br> </br> </br>
          <p style="font-size: 60px;">Seu IP        :  <span style="font-weight: bold;">@php echo $_SERVER['REMOTE_ADDR'] @endphp</span> </p>
       

        @can('tifpolis')
        <h2> vc é da ti florianopolis</h2>
        @else
        <h2> vc não é da ti florianopolis</h2>
        @endcan

        @can('admin')
        <h2>vc é admin</h2>
        @else
        <h2> vc não admin</h2>
        @endcan



          </br>

        @php
          //var_dump($_SERVER);
          //echo '<pre>';
          //print_r($_SERVER);
          //echo '<pre>';
        @endphp



@endsection('content')


