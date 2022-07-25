<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Suporte</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="asset('AdminLTE/dist/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container">   
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Laudo Técnico</h3>
              </div>
              <form action="formresp.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="numeroPatrimonio">Numero do Patrimonio:</label>
                    <input type="text" class="form-control" required id="numeroPatrimonio" name="numeroPatrimonio">
                  </div>
                  <div class="form-group">
                    <label for="name">Responsável pelo Bem:</label>
                    <input type="text" class="form-control" required id="name" name="name" >
                  </div>
                  <div class="form-group">
                    <label for="matriculaSiape">Matricula Siape:</label>
                    <input type="text" class="form-control" required id="matriculaSiape" name="matriculaSiape">
                  </div>
                  <div class="form-group">
                    <label for="lotacao">Lotação:</label>
                    <input type="text" class="form-control" required id="lotacao" name="lotacao">
                  </div>
                  <div class="form-group">
                    <label for="tipoEquipamento">Tipo de Equipamento:</label>
                    <input type="text" class="form-control" required id="tipoEquipamento" name="tipoEquipamento">
                  </div>
                  <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" required id="marca" name="marca">
                  </div>
                  <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control" required id="modelo" name="modelo">
                  </div>
                  <div class="form-group">
                    <label class="label-title">Funcionamento</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcionamento" value="01" required>
                      <label class="form-check-label" >Funcionando</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcionamento" value="02">
                      <label class="form-check-label">Não Funcionando</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcionamento" value="03">
                      <label class="form-check-label">Parcialmente funcionando</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label-title">Emcaminhamento</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="emcaminhamento" value="01" required>
                      <label class="form-check-label" >Sem Solucao Técnica Local</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="emcaminhamento" value="02">
                      <label class="form-check-label">Com Solucao Técnica Estimada, Mediante Avalição de Custo</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="emcaminhamento" value="03">
                      <label class="form-check-label">Com Solucao Técnica Local e Sem Custo</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="emcaminhamento" value="04">
                      <label class="form-check-label">Com Solucao Técnica Local, Mediante Compra de Peças</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="emcaminhamento" value="05">
                      <label class="form-check-label">Não se Aplica</label>
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="responsavelLaudo">Responsável pelo Laudo:</label>
                      <input type="text" class="form-control" required id="responsavelLaudo" name="responsavelLaudo">
                    </div>
                    <div class="form-group">
                        <label>Observações:</label>
                        <textarea class="form-control" rows="3" required id="obs" name="obs"></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Gerar Parecer</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- jQuery -->
<script src="asset('AdminLTE/dist/js/jquery.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="asset('AdminLTE/dist/js/adminlte.min.js')}}"></script> 
</body>
</html>
