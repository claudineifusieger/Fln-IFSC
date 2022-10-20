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
              <label for="matricula">matricula:</label>
                <input type="text" class="form-control" required id="matricula" name="matricula" >
            </div>          
            <div class="form-group">
              <label for="nome">Responsável:</label>
              <input type="text" class="form-control" required id="nome" name="nome">
            </div>
            <div class="form-group" width="25%">
              <label for="labs">Laboratorio(s):</label>
              <input type="text" class="form-control" required id="labs" name="labs">
            </div>  
            <div class="form-group" width="25%">
              <label for="soft">Softwares:</label>
              <input type="text" class="form-control" required id="soft" name="soft">
            </div>  
            <div class="form-group">
              <label>Observações:</label>
              <textarea class="form-control" rows="3" required id="obs" name="obs"></textarea>
            </div>   
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Gerar PDF</button>
          </div>
          <!-- /.card-footer-->
        </div>
      <!-- /.card -->
      </form>
    </section>



  @endsection('content')
