@extends('layouts.pdf') 


@section('content')

        <div class="jumbotron">
          <h1 class="display-4">Coordena            o de Suporte de Inform      tica</h1>
          <p class="lead">Informa            es aqui contidas n      o sao salvas ou armazenadas</p>
          <hr class="my-4">
          </br> </br> </br> </br>
          <p style="font-size: 60px;">Seu IP        :  <span style="font-weight: bold;">@php echo $_SERVER['REMOTE_ADDR'] @endphp</span> </p>
        </div>



          </br>

        @php
          //var_dump($_SERVER);
          //echo '<pre>';
          //print_r($_SERVER);
          //echo '<pre>';
        @endphp



@endsection('content')


