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
      <h2> <img src="{{asset('AdminLTE/dist/img/laudo.png')}}" width="3%"> TERMO DE COMPROMISSO</h2>
      <hr style="border-top: 1px solid black;">
      <p style="line-height:1em;font-size: 14px;">Tendo em vista a necessidade de instalação, configuração e manutenção frequente dos softwares de
        programação de CLP, Redes Industriais, Sistemas supervisórios e Sistemas Embarcados, que resultou
        na concessão à mim do perfil de Administrador no período do ano letivo 2022 - por meio de usuário
        (LabC308) e senha específicos para tal, que me dá a prerrogativa de acesso ao sistema Windows e
        demais aplicativos nele embarcados, nos computadores do Laboratório C308 (exclusivamente),
        venho firmar compromisso com o Departamento de Tecnologia da Informação e Comunicação –
        DTICOM do Campus Florianópolis no sentido de:</p>
        <ul>
          <li>a) Não modificar o conjunto de sistemas e aplicativos ali instalados; </li>
          <li>b) Manter instalados somente sistemas e aplicativos genuínos;  </li>
          <li>c) Não instalar sistemas e aplicativos não licenciados;  </li>
          <li>d) Cumprir todas as normas do IFSC relacionadas a Tecnologia da Informação e Comunicação; </li>
          <li>e) Não conceder o perfil de usuário a terceiros. </li>
        </ul>
    </div>
    <div style="bottom: 0;position: absolute; text-align: center;width: 99%;line-height:0.8em;">
      <div>
        <p style="text-decoration:overline;margin-bottom: 35px;font-size: 12px;"><b>    nome da pessoa</b></p>
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
