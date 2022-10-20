@extends('layouts.pdf') 


@section('content')

         <section>
        <div>
          <!-- Default box -->
          <div>      
            <h2 align="center"> Coordenação de Suporte Informática.</h2>
          </div>
          <div style="line-height:1em;font-size: 12px;">
            <h2> <img src="{{asset('AdminLTE/dist/img/laudo.png')}}" width="3%"> Laudo Técnico</h2>
            <hr style="border-top: 1px solid black;">
            <table>
              <td style="width: 500px;">
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
                  <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Sem Solução Técnica Local </p>
                @else
                  <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Sem Solução Técnica Local </p>
                @endif 
                @if ( $data['encaminhamento'] === "02" ) 
                  <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked="">  Com Solução Técnica Estimada, Mediante Avalição de Custo </p>
                @else
                  <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" >  Com Solução Técnica Estimada, Mediante Avalição de Custo </p>
                @endif  
                @if ( $data['encaminhamento'] === "03" ) 
                  <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Com Solução Técnica Local e Sem Custo </p>
                @else
                  <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Com Solução Técnica Local e Sem Custo </p>
                @endif 
                @if ( $data['encaminhamento'] === "04" ) 
                  <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" checked=""> Com Solução Técnica Local, Mediante Compra de Peças </p>
                @else
                  <p style="margin: 0px; padding: 0px;"> <input style="vertical-align: bottom;" type="checkbox" > Com Solução Técnica Local, Mediante Compra de Peças </p>
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
                  <img src="{{url("storage/{$data['pic1']}")}}" height="150" width="100%" style="border: 3px solid black; margin-bottom: 5px;">
                  @endisset
                  @isset ( $data['pic2'] ) 
                  <img src="{{url("storage/{$data['pic2']}")}}" height="150" width="100%" style="border: 3px solid black; margin-bottom: 5px;">
                  @endisset
                  @isset ( $data['pic3'] ) 
                  <img src="{{url("storage/{$data['pic3']}")}}" height="150" width="100%" style="border: 3px solid black; margin-bottom: 5px;">
                  @endisset
                </div>
              </td>
            </table>  
            <p style="line-height:1.5em;font-size: 12px;"><b>Obs:</b> {{ $data['obs'] }} </p>
          </div>
          <div style="margin-top: 90px; text-align: center;width: 99%;line-height:0.8em;">
            <div>
              <p style="text-decoration:overline;margin-bottom: 35px;font-size: 12px;">Responsavel Tecnico Pelo Laudo<b>    {{$data['responsavelLaudo']}}</b></p>
              <p style="text-align: right;font-size: 12px;"> Florianópolis, <?php echo strftime('%d', strtotime('today')) ." de ". ucwords(strftime('%B', strtotime('today'))) ." de ". strftime('%Y', strtotime('today')); ?></p>
            </div>
            
          </div>
        </div>
      </section>       



@endsection('content')




