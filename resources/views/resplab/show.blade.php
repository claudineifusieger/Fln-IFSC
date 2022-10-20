@extends('layouts.pdf') 


@section('content')


        <h2>TERMO DE COMPROMISSO</h2>
        <p>Tendo em vista a necessidade de instalação, configuração e manutenção
          frequente dos softwares: <strong>{{$data['soft']}}</strong>, que resultou na
          concessão à mim de uma contacom privilegios administrativos no período do ano letivo 2022, que me dá a
          prerrogativa de acesso ao sistema Windows e demais aplicativos nele
          embarcados, nos computadores do Laboratório  <strong>{{$data['soft']}}</strong> (exclusivamente), venho
          firmar compromisso com o Departamento de Tecnologia da Informação e
          Comunicação – DTICOM do Campus Florianópolis no sentido de: </p>
        <ul>
          <li> Não modificar o conjunto de sistemas e aplicativos ali instalados; </li>
          <li> Manter instalados somente sistemas e aplicativos genuínos; </li>
          <li> Não instalar sistemas e aplicativos não licenciados; </li>
          <li> Cumprir todas as normas do IFSC relacionadas a Tecnologia da Informação e Comunicação; </li>
          <li> Não conceder o perfil de usuário a terceiros;</li>
          <li> Manter o computador dentro dos padrões e procedimentos estabelecidos IFSC;</li>
          <li> Não divulgar a chave e senha a outras pessoas;</li>
          <li> Reportar imediatamente à DTICOM, em caso de violação, acidental ou não, da sua senha, providenciando a sua substituição;</li>
          <li> Solicitar o cancelamento do usuário e senha quando não for mais utilizado.</li>
        </ul>


          <div style="margin-top: 150px; text-align: center;width: 99%;line-height:0.8em;">
            <div>
              <p style="text-decoration:overline;margin-bottom: 35px;font-size: 12px;">Responsavel Pelo Lab<b> {{$data['nome']}} - (Siape{{$data['matricula']}})</b></p>
              <p style="text-align: right;font-size: 12px;"> Florianópolis, <?php echo strftime('%d', strtotime('today')) ." de ". ucwords(strftime('%B', strtotime('today'))) ." de ". strftime('%Y', strtotime('today')); ?></p>
            </div>
            
          </div>

@endsection('content')
