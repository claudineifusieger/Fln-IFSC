@extends('layouts.pdf') 


@section('content')


        <h2>TERMO DE COMPROMISSO</h2>
        <p>Tendo em vista a necessidade de instalação, configuração e manutenção
          frequente dos softwares CAD, Solidworks e Inventor, que resultou na
          concessão à mim do perfil de Administrador no período do ano letivo 2022 - por
          meio de usuário (professor) e senha específicos para tal, que me dá a
          prerrogativa de acesso ao sistema Windows e demais aplicativos nele
          embarcados, nos computadores do Laboratório C206 (exclusivamente), venho
          firmar compromisso com o Departamento de Tecnologia da Informação e
          Comunicação – DTICOM do Campus Florianópolis no sentido de: a) Não
          modificar o conjunto de sistemas e aplicativos ali instalados; b) Manter
          instalados somente sistemas e aplicativos genuínos; c) Não instalar sistemas e
          aplicativos não licenciados; d) Cumprir todas as normas do IFSC relacionadas
          a Tecnologia da Informação e Comunicação; e) Não conceder o perfil de
          usuário a terceiros.</p>


          <div style="margin-top: 150px; text-align: center;width: 99%;line-height:0.8em;">
            <div>
              <p style="text-decoration:overline;margin-bottom: 35px;font-size: 12px;">Responsavel Pelo Lab<b> colocar o nome no futuro</b></p>
              <p style="text-align: right;font-size: 12px;"> Florianópolis, <?php echo strftime('%d', strtotime('today')) ." de ". ucwords(strftime('%B', strtotime('today'))) ." de ". strftime('%Y', strtotime('today')); ?></p>
            </div>
            
          </div>

@endsection('content')
