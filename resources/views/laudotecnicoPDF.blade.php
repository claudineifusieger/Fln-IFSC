<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ctic - Visualizar Impressão</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>
<body>
<section>
  <div>
    <!-- Default box -->
    <div>    
      <img src="{{asset('AdminLTE/dist/img/cabecalho.jpg')}}" width="100%"> 
    </div>
    <div>      
      <h2 align="center"> Coordenação de Suporte Informática.</h2>
    </div>
    <div style="line-height:1em;font-size: 12px;">
      <h2> <img src="{{asset('AdminLTE/dist/img/laudo.png')}}" width="3%"> Laudo Técnico</h2>
      <hr style="border-top: 1px solid black;">
      <table>
        <td width="73%">
          <p><b>Responsavel pelo Patrimônio: </b></p>
          <p><b>Nome:    </b> {{$data['name']}}   (Siape: {{$data['matriculaSiape']}}) </p>
          <p><b>Lotação: </b> {{$data['lotacao']}} </p>
          <hr style="border-top: 1px solid black;">
          <p><b>Identificação do Patrimônio: </b></p>
          <p><b>Numero do Patrimônio: </b> {{$data['numeroPatrimonio']}} </p>
          <p><b>Tipo de Equipamento:  </b> {{$data['tipoEquipamento']}} </p>
          <p><b>Marca:                </b> {{$data['marca']}} </p>
          <p><b>Modelo:               </b> {{$data['modelo']}} </p>
          <p><b>Local:                </b> {{$data['local']}} </p>
          <hr style="border-top: 1px solid black; ">
          <p style="margin: 0px; padding-top: 5px;"><b>Constatação:    </b></p>                  
          @if ( $data['funcionamento'] === "01" ) 
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Funcionando </p>
          @else
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Funcionando </p>
          @endif 
          @if ( $data['funcionamento'] === "02" ) 
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Não Funcionando </p>
          @else
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Não Funcionando </p>
          @endif
          @if ( $data['funcionamento'] === "03" ) 
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Parcialmente Funcionando </p>
          @else
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Parcialmente Funcionando </p>
          @endif  
          <hr style="border-top: 1px solid black;">
          <p style="margin: 0px;  padding-top: 5px"><b>Emcaminhamento: </b> </p>
          @if ( $data['encaminhamento'] === "01" ) 
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Sem Solucao Técnica Local </p>
          @else
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Sem Solucao Técnica Local </p>
          @endif 
          @if ( $data['encaminhamento'] === "02" ) 
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked="">  Com Solucao Técnica Estimada, Mediante Avalição de Custo </p>
          @else
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" >  Com Solucao Técnica Estimada, Mediante Avalição de Custo </p>
          @endif  
          @if ( $data['encaminhamento'] === "03" ) 
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Com Solucao Técnica Local e Sem Custo </p>
          @else
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Com Solucao Técnica Local e Sem Custo </p>
          @endif 
          @if ( $data['encaminhamento'] === "04" ) 
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Com Solucao Técnica Local, Mediante Compra de Peças </p>
          @else
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Com Solucao Técnica Local, Mediante Compra de Peças </p>
          @endif  
          @if ( $data['encaminhamento'] === "05" ) 
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Não se Aplica </p>
          @else
            <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Não se Aplica </p>
          @endif 
        </td>
        <td width="26%"> 
          <div>
            @isset ( $data['pic1'] ) 
            <img src="{{url("storage/{$data['pic1']}")}}" width="85%" style="border: 3px solid black;margin: 3px;">
            @endisset
            @isset ( $data['pic2'] ) 
            <img src="{{url("storage/{$data['pic2']}")}}" width="85%" style="border: 3px solid black;margin: 3px;">
            @endisset
            @isset ( $data['pic3'] ) 
            <img src="{{url("storage/{$data['pic3']}")}}" width="85%" style="border: 3px solid black;margin: 3px;">
            @endisset
          </div>
        </td>
      </table>  
      <p style="line-height:1.5em;font-size: 12px;"><b>Obs:</b> {{ $data['obs'] }} </p>
    </div>
    <div style="bottom: 0;position: absolute; text-align: center;width: 99%;line-height:0.8em;">
      <div>
        <p style="text-decoration:overline;margin-bottom: 35px;font-size: 12px;">Responsavel Tecnico Pelo Laudo<b>    {{$data['responsavelLaudo']}}</b></p>
        <p style="text-align: right;font-size: 12px;"> Florianópolis, <?php echo strftime('%d', strtotime('today')) ." de ". ucwords(strftime('%B', strtotime('today'))) ." de ". strftime('%Y', strtotime('today')); ?></p>
      </div>
      <div style="line-height:0.4em; margin-bottom: -30px;font-size: 8px;" >
        <p>Instituto Federal de Santa Catarina – Câmpus Florianópolis</p>
        <p>Av. Mauro Ramos, 950 | Centro | Florianópolis /SC | CEP: 88.020-300</p>
        <p>Fone: (48) 3211-6000 | www.ifsc.edu.br | CNPJ 11.402.887/0002-41</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>
