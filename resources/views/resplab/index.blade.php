@extends('layouts.adminlte.index') 

@section('title','Fazer Laudo')

@section('page','Responsabilidade por Laboratório')



@section('content')

    <!-- Main content -->
    <section class="content">


              <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Listando Últimos Laudos Feitos </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group ">
                    <table id="laudos" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Matricula</th>
                                <th>Nome</th>
                                <th>Data Hora</th>
                                <th>Vizualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($resplabs as $resplab)
                            <tr>
                                <td>{{$resplab->id}}</td>
                                <td>{{$resplab->matricula}}</td>
                                <td>{{$resplab->nome}}</td>
                                <td>{{ date( 'd/m/Y  H:i' , strtotime($resplab->updated_at))}}</td>
                                <td><a href="{{$resplab->url}}" target="_blank"> <div class="d-flex justify-content-center bg-info text-white">Ver</div></a></td>
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Matricula</th>
                                <th>Nome</th>
                                <th>Data Hora</th>
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


