@extends('layouts.adminlte.imprimir') 





@section('content')

<section class="content" style="height:29.7cm;">

  <!-- Default box -->
  <div class="card card-solid">    
    <img class="w-100 mb-4" src="{{asset('AdminLTE/dist/img/cabecalho.png')}}" >
  </div>
  <div class="card-body mb-5"   style="line-height:0.85em;">
    <div class="row">
      <div class="col-8">
         <h2 class="mb-4 font-weight-bold text-uppercase">   Coordenação de Suporte Informática.</h2>
        <h2><i class="far fa-file  pr-2"></i> Laudo Técnico</h2><hr>
        <p class="text-lg"><b>Responsavel pelo Patrimônio: </b></p><hr>
        <p class="text-md"><b>Nome:    </b> {{$data['name']}}   (Siape: {{$data['matriculaSiape']}}) </p>
        <p class="text-md"><b>Lotação: </b> {{$data['lotacao']}} </p><hr>
        <p class="text-lg"><b>Identificação do Patrimônio: </b></p><hr>
        <p class="text-md"><b>Numero do Patrimônio: </b> {{$data['numeroPatrimonio']}} </p>
        <p class="text-md"><b>Tipo de Equipamento:  </b> {{$data['tipoEquipamento']}} </p>
        <p class="text-md"><b>Marca:                </b> {{$data['marca']}} </p>
        <p class="text-md"><b>Modelo:               </b> {{$data['modelo']}} </p>
        <p class="text-md"><b>Local:                </b> {{$data['local']}} </p><hr>
        <p class="text-lg"><b>Constatação:    </b></p>                     
        @if ( $data['funcionamento'] === "01" ) 
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" checked="">
        @else
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" >
        @endif   
          Funcionando
        </p>
        @if ( $data['funcionamento'] === "02" ) 
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" checked="">
        @else
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" >
        @endif
          Não Funcionando
        </p>
        @if ( $data['funcionamento'] === "03" ) 
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" checked="">
        @else
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" >
        @endif   
          Parcialmente Funcionando
        </p>
        <p class="text-lg"><b>Emcaminhamento: </b> </p>
        @if ( $data['encaminhamento'] === "01" ) 
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" checked="">
        @else
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" >
        @endif     
          Sem Solucao Técnica Local
        </p>
        @if ( $data['encaminhamento'] === "02" ) 
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" checked="">
        @else
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" >
        @endif    
          Com Solucao Técnica Estimada, Mediante Avalição de Custo
        </p>
        @if ( $data['encaminhamento'] === "03" ) 
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" checked="">
        @else
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" >
        @endif     
          Com Solucao Técnica Local e Sem Custo
        </p>
        @if ( $data['encaminhamento'] === "04" ) 
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" checked="">
        @else
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" >
        @endif    
          Com Solucao Técnica Local, Mediante Compra de Peças
        </p>
        @if ( $data['encaminhamento'] === "05" ) 
          <p class="text-md"> <input class="custom-control-input-outline" type="checkbox" checked="">
        @else
          <p class="text-md mb-4"> <input class="custom-control-input-outline" type="checkbox" >
        @endif    
          Não se Aplica
        </p>
        <p class="text-md"><b>Obs:            </b> {{$data['obs']}} </p>
      </div>
      <div class="col-4 text-center">
        <div class="row">
          <div class="col-11">
            <img class="w-100 p-4" src="{{asset('AdminLTE/dist/img/ctic.png')}}" >
          </div>
          <div class="col-11">
            <img class="w-100 p-4" src="{{asset('AdminLTE/dist/img/ctic.png')}}">
          </div>
          <div class="col-11">
            <img class="w-100 p-4" src="{{asset('AdminLTE/dist/img/ctic.png')}}">
          </div>                        
        </div>
      </div>
    </div> 
  </div>
  <div class="card-footer" style="bottom: 0;position: fixed;text-align: center;width: 99%;">
    <div class="bt-4" style="margin-bottom: 50px;">
      <p class="text-center text-md mt-4 mb-4" style="text-decoration:overline;margin-bottom: 25px;">Responsavel Tecnico Pelo Laudo<b>    {{$data['responsavelLaudo']}}</b></p>
      <p class="text-right mr-4" style="margin-bottom: 50px;"> Florianópolis, <?php echo strftime('%d', strtotime('today')) ." de ". ucwords(strftime('%B', strtotime('today'))) ." de ". strftime('%Y', strtotime('today')); ?></p>
    </div>
    <div class="text-center font-weight-bold" style="line-height:0.5em; margin-bottom: -20px;" >
      <p class="text-center">Instituto Federal de Santa Catarina – Câmpus Florianópolis</p>
      <p class="text-center">Rua: 14 de julho, 150 | Coqueiros | Florianópolis /SC | CEP: 88.075-010</p>
      <p class="text-center">Fone: (48) 3877-9000 | www.ifsc.edu.br | CNPJ 11.402.887/0001-60</p>
    </div>
  </div>
</section>

@endsection('content')


