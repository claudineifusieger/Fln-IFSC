<?php
  setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  date_default_timezone_set('America/Sao_Paulo');
 /* 
  $name               = $data['name'];
  $matriculaSiape     = $data['matriculaSiape'];
  $lotacao            = $data['lotacao'];
  $numeroPatrimonio   = $data['numeroPatrimonio'];
  $tipoEquipamento    = $data['tipoEquipamento'];
  $matriculaSiape     = $data['matriculaSiape'];
  $matriculaSiape     = $data['matriculaSiape'];
  $marca              = $data['marca'];
  $modelo             = $data['modelo'];
  $funcionamento      = $data['funcionamento'];    
  $emcaminhamento     = $data['emcaminhamento'];
  $responsavelLaudo   = $data['responsavelLaudo'];
  $obs                = $data['obs'];

  
 */
  
?>

@extends('layouts.template.index')

@section('title','Laudo')



@section('content')
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- Main content -->
    <div class="invoice p-3 mb-3">
      <div class="row">
        <div class="col-12">
          <h2>
            <i class="fa fa-ticket" aria-hidden="true"></i>  &nbsp;&nbsp;&nbsp;  Coordenação de Suporte Informática.
          </h2> <hr>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Laudo Técnico</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-8" style="display: inline-block">  
                    <dl>
                      <dt style="font-size: 23px;">Responsável pelo Bem:</dt>
                      <dd>
                        <ul style="list-style: none;font-size: 18px;">
                          <li><span>Nome: &nbsp;&nbsp;</span>{{$data->name}}   (Siape: {{$data->matriculaSiape}}</li>
                          <li><span>Lotação: &nbsp;&nbsp;</span>{{$data->lotacao}}</li>
                        </ul>
                      </dd>
                      <dt style="font-size: 23px;">Identificação do Bem</dt>
                      <dd>
                        <ul style="font-size: 18px;">
                          <li><span>Numero do Patrimonio: &nbsp;&nbsp;</span> {{$data->numeroPatrimonio}}</li>
                          <li><span>Tipo de Equipamento: &nbsp;&nbsp;</span> {{$data->tipoEquipamento}}</li>
                          <li><span>Marca: &nbsp;&nbsp;</span> {{$data->marca}}</li>
                          <li><span>Modelo: &nbsp;&nbsp;</span> {{$data->modelo}}</li>
                        </ul>
                      </dd>
                      <dt style="font-size: 23px;">Constatação:</dt>
                      <dd>
                        
                      </dd>
                      <dt style="font-size: 23px;">Emcaminhamento:</dt>  
                      <dd>
                        
                      </dd>
                      <dt style="font-size: 23px;">Observações:</dt>
                      <dd>
                        <p style="font-size: 18px;"> <span>Obs: &nbsp;&nbsp;</span> {{$data->obs}}</p>
                      </dd>                   
                    </dl>
                  </div>
                </div>
              </div> <br><br><br><br><br><br>
              <div class="row">
                <div class="col-3">   </div>
                <div class="col-6">
                  <br><br><br><br>
                  <hr><p style="text-align:center"> Responsavel Tecnico Pelo Laudo &nbsp;{{$data->responsavelLaudo}}</p>
                </div>
                <div class="col-3">   </div>
              </div><br><br>
              <div class="col-12"><br>
                <h4>
                  <small class="float-right">Local e data da avaliação: Florianópolis, <?php echo strftime('%d', strtotime('today')) ." de ". ucwords(strftime('%B', strtotime('today'))) ." de ". strftime('%Y', strtotime('today')); ?> </small>
                </h4>
              </div>
            </div>
          </div>                
        </div>
      </div>
    </div>
  </div>
</div>

@endsection('content')







<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $numeroPatrimonio; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
