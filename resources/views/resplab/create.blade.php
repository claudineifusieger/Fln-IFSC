@extends('layouts.adminlte.index') 

@section('title','Fazer Laudo')

@section('page','Laudo Técnico')



@section('content')

    <!-- Main content -->
    <section class="content"> 

      <form action="{{route('resplab.store')}}" method="post" enctype="multipart/form-data" target="_blank">
        @csrf
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title" style="width: 90%;">             
               <a href="{{$bem['link']}}" target="_blank" style="text-align: center;" >Ver no Sistema DGP dados desse Patrimonio</a>
             </h3>  
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
              <label for="numeroPatrimonio">Numero do Patrimônio:</label>
                <input type="text" class="form-control" required id="numeroPatrimonio" name="numeroPatrimonio" value="{{$bem['numeroPatrimonio']}}">
            </div>
            <div class="form-group">
              <label for="name">Responsável pelo Bem:</label>
              <input type="text" class="form-control" required id="name" name="name" value="{{$bem['nome']}}">
            </div>
            <div class="form-group">
              <label for="matriculaSiape">Matricula Siape:</label>
              <input type="text" class="form-control" required id="matriculaSiape" name="matriculaSiape" value="{{$bem['matriculaSiape']}}">
            </div>
            <div class="form-group">
              <label for="lotacao">Lotação do Responsável:</label>
              <input type="text" class="form-control" required id="lotacao" name="lotacao" value="{{$bem['unidade']}}">
            </div>
            <div class="form-group">
              <label for="tipoEquipamento">Tipo de Equipamento:</label> 
              <input type="text" class="form-control" required id="tipoEquipamento" name="tipoEquipamento" value="{{$bem['tipoEquipamento']}}">
            </div>
            <div class="form-group">
              <label for="marca">Marca: </label> 
              <input type="text" class="form-control" required id="marca" name="marca" value="{{$bem['marca']}}">   
            </div>
            <div class="form-group">
              <label for="modelo">Modelo:</label>
              <input type="text" class="form-control" required id="modelo" name="modelo" value="{{$bem['modelo']}}">
            </div>
            <div class="form-group">
              <label for="local">Local do Equipamento:</label>
              <input type="text" class="form-control" required id="local" name="local" value="{!!utf8_encode($bem['local'])!!}"> 
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
                <label class="form-check-label" >Sem Solução Técnica Local</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="encaminhamento" value="02">
                <label class="form-check-label">Com Solução Técnica Estimada, Mediante Avalição de Custo</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="encaminhamento" value="03">
                <label class="form-check-label">Com Solução Técnica Local e Sem Custo</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="encaminhamento" value="04">
                <label class="form-check-label">Com Solução Técnica Local, Mediante Compra de Peças</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="encaminhamento" value="05">
                <label class="form-check-label">Não se Aplica</label>
              </div>
            </div>
            <div class="form-group">
              <label for="responsavelLaudo">Responsável pelo Laudo:</label>
              <input type="text" class="form-control" required id="responsavelLaudo" name="responsavelLaudo" value="{{Str::title(Auth::user()->name)}}">
            </div>
            <div class="form-group">
              <label>Observações:</label>
              <textarea class="form-control" rows="3" required id="obs" name="obs">{{$bem['descricao']}}</textarea>
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
