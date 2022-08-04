@extends('layouts.adminlte.index') 

@section('title','')

@section('page','')



@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Coordenação de Suporte de Informática</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
              </div>
              <div class="row">
                <div class="col-12">
                  <img src="{{asset('AdminLTE/dist/img/informatica.png')}}" width="90%" style="border: 3px solid black;margin: 3px;">
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3><i class="fas fa-users"></i> - Servidores </h3>
              <br>
              <div class="text-muted">
                <p class="text-sm"> <b>Luciano </b>(Coordenador) </p>
                <p class="text-sm"> <b>Claudinei</b>  </p>
                <p class="text-sm"> <b>Adriano</b>  </p>
                <p class="text-sm"> <b>Paulo</b>  </p>
                <p class="text-sm"> <b>Ederson</b>  </p>
                <p class="text-sm"> <b>João</b> (Estagiario) </p>
                <p class="text-sm"> <b>Dani</b> (Estagiario) </p>
              </div>

              <h3 class="mt-5"><i class="fas fa-phone"></i> - Contato</h3>
              <ul class="list-unstyled">
                <li>
                  <a class="btn-link text-secondary"></i>Instituto Federal de Santa Catarina – Câmpus Florianópolis</a>
                </li>
                <li>
                  <a class="btn-link text-secondary">Av. Mauro Ramos 950 - Centro - Florianópolis /SC </a>
                </li>
                <li>
                  <a class="btn-link text-secondary">CEP: 88.020-300</a>
                </li>
                <li>
                  <a class="btn-link text-secondary">suporte.ti.fln@ifsc.edu.br</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>

    </section>



  @endsection('content')
