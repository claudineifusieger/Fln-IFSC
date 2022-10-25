@extends('layouts.adminlte.index') 

@section('title','Fazer Laudo')

@section('page','Laudo Técnico')



@section('content')

    <!-- Main content -->
    <section class="content"> 

      <form action="{{route('laudo.update',$laudo->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                <label>alterar o pdf salvo no sistema:</label>
                <input type="hidden" name="id" value="{{$laudo->id}}">
                <input type="hidden" name="url" value="{{$laudo->url}}">
                <input type="hidden" name="patrimonio" value="{{$laudo->patrimonio}}">
                <input class="form-control" type="file" name="pdf" > 
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
