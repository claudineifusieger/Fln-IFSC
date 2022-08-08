@extends('layouts.adminlte.index') 

@section('title','Fazer Laudo')

@section('page','Laudo Técnico')



@section('content')

    <!-- Main content -->
    <section class="content">

      <form action="{{route('laudotecnico')}}" method="get" enctype="multipart/form-data">
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
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
          <!-- /.card-footer-->
        </div>
      <!-- /.card -->
      </form>
    </section>



  @endsection('content')
