@extends('layouts.adminlte.index') 

@section('title','Fazer Laudo')

@section('page','Laudos Técnico')



@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- card pre preencher -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Iniciar Novo Laudo Técnico </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"><i class="fas fa-times"></i></button>
            </div>
            </div>
            <div class="card-body">
                <form action="{{route('laudo.create')}}" method="get" enctype="multipart/form-data">
                @csrf   
                <div class="form-group" width="25%">
                    <label for="numeroPatrimonio">Numero do Patrimônio:</label>
                    <input type="text" class="form-control" required id="numeroPatrimonio" name="numeroPatrimonio">
                </div>                
                <button type="submit" class="btn btn-primary">Iniciar Documento</button>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

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
                                <th>Patrimonio</th>
                                <th>Data Hora</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($laudos as $laudo)
                            <tr>
                                <td>{{$laudo->id}}</td>
                                <td>{{$laudo->patrimonio}}</td>
                                <td>{{ date( 'd/m/Y  H:i' , strtotime($laudo->updated_at))}}</td>
                                <td>
                                <a href="{{$laudo->url}}" target="_blank"><button type="button" class="btn btn-info">Vizualizar</button></a>
                                @can('admin') 
                                    <a href="{{route('laudo.edit',$laudo->id)}}" ><button type="button" class="btn btn-warning">Alterar PDF</button></a>
                                    <a href="#" ><button type="button" class="btn btn-danger">Deletar</button></a>
                                @endcan
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Patrimonio</th>
                                <th>Data Hora</th>
                                <th></th>
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


