@extends('layouts.adminlte.index') 

@section('title','Fazer Laudo')

@section('page','Laudo Técnico')



@section('content')

    <!-- Main content -->
    <section class="content"> 

      <form action="{{route('laudo.store')}}" method="post" enctype="multipart/form-data">
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
              <label for="name">Responsável pelo Bem:</label>
              <input type="text" class="form-control" required id="name" name="name" >
            </div>
            <div class="form-group">
              <label for="matriculaSiape">Matricula Siape:</label>
              <input type="text" class="form-control" required id="matriculaSiape" name="matriculaSiape">
            </div>
            <div class="form-group">
              <label for="descrição">Descrição do Bem:</label>
              <input type="text" class="form-control" required id="descrição" name="descrição">
            </div>
            <div class="form-group">
              <label for="valor">Valor do Bem:</label>
              <input type="text" class="form-control" required id="valor" name="valor">
            </div>
            <div class="form-group">
              <label class="label-title">Estado de conservação</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="conservacao" value="bom" required>
                <label class="form-check-label" >Bom</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="conservacao" value="recuperavel">
                <label class="form-check-label">Recuperável</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="conservacao" value="antieconomico">
                <label class="form-check-label">Antieconômico</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="conservacao" value="irrecuperavel">
                <label class="form-check-label">Irrecuperável</label>
              </div>
            </div>
            <hr>
            <div class="form-group">
              <label for="campus">Campus:</label>
              <input type="text" class="form-control" required id="campus" name="campus">
            </div>
            <div class="form-group">
              <label for="setor">Setor:</label>
              <input type="text" class="form-control" required id="setor" name="setor">
            </div>
            <div class="form-group">
              <label for="responsavel">Responsável:</label>
              <input type="text" class="form-control" required id="responsavel" name="responsavel">
            </div>
            <div class="form-group">
              <label for="localzacao">Localização:</label>
              <input type="text" class="form-control" required id="localzacao" name="localzacao">
            </div>
            <div class="form-group">
              <label>CRITÉRIOS UTILIZADOS PARA AVALIAÇÃO DO BEM E SUA RESPECTIVA FUNDAMENTAÇÃO (ANEXAR DOCUMENTOS COMPROBATÓRIOS):</label>
              <textarea class="form-control" rows="3" required id="obs" name="obs"></textarea>
            </div>
            <div class="form-group">
              <label for="vida">Vida Útil:</label>
              <input type="text" class="form-control" required id="vida" name="vida">
            </div>
            <div class="form-group">
              <label>INTERESSE DO IFSC (PARECER):</label>
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
            <button type="submit" class="btn btn-primary">Gerar Laudo</button>
          </div>
          <!-- /.card-footer-->
        </div>
      <!-- /.card -->
      </form>
    </section>



  @endsection('content')
