@extends('layouts.adminlte.index') 

@section('title','Fazer Laudo')

@section('page','Laudos Técnico')



@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Listando Últimos Laudos Feitos </h3>

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
            <div class="form-group ">
              <table id="laudos" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Patrimonio</th>
                <th>Data</th>
                <th>Vizualizar</th>
            </tr>
        </thead>
        <tbody>
          @foreach($laudos as $laudo)
            <tr>
                <td>{{$laudo->id}}</td>
                <td>{{$laudo->patrimonio}}</td>
                <td>{{ date( 'd/m/Y  H:i' , strtotime($laudo->updated_at))}}</td>
                <td><a href="{{$laudo->url}}" target="_blank"> <div class="d-flex justify-content-center bg-info text-white">Ver</div></a></td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Patrimonio</th>
                <th>Data</th>
                <th>Vizualizar</th>
            </tr>
        </tfoot>
    </table>

              
            </div>   
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
          <!-- /.card-footer-->
        </div>
      <!-- /.card -->

    </section>





  @endsection('content')


