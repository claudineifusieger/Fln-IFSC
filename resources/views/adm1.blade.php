@extends('layouts.adminlte.index') 

@section('title','Fazer Laudo')

@section('page','Laudo Técnico para Desfasimento')



@section('content')

    <!-- Main content -->
    <section class="content">

      <form action="{{route('laudo')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
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
              <label for="lotacao">Lotação do Responsável:</label>
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
              <label for="local">Local do Equipamento:</label>
              <input type="text" class="form-control" required id="local" name="local">
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
                <input class="form-check-input" type="radio" name="encaminhamento" value="01" required>
                <label class="form-check-label" >Sem Solucao Técnica Local</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="encaminhamento" value="02">
                <label class="form-check-label">Com Solucao Técnica Estimada, Mediante Avalição de Custo</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="encaminhamento" value="03">
                <label class="form-check-label">Com Solucao Técnica Local e Sem Custo</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="encaminhamento" value="04">
                <label class="form-check-label">Com Solucao Técnica Local, Mediante Compra de Peças</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="encaminhamento" value="05">
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
              <div class="form-group">
                <label>Imagens opcional:</label>
                <input class="form-control" type="file" name="pic1" accept="image/*"> 
                <input class="form-control" type="file" name="pic2" accept="image/*"> 
                <input class="form-control" type="file" name="pic3" accept="image/*"> 
              </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Gerar Parecer</button>
          </div>
          <!-- /.card-footer-->
        </div>
      <!-- /.card -->
      </form>
    </section>



  @endsection('content')
