<!DOCTYPE html>
<html>
<head>
  <!-- /.head --> 
  @includeif('layouts.adminlte.head') 
  <!-- /.head -->
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- barra-superior -->
    @includeif('layouts.adminlte.navbar')
    <!-- /.barra-superior -->

    <!-- menu -->
    @includeif('layouts.adminlte.menu')
    <!-- /.menu -->


    <div class="content-wrapper">
      <!-- contentHead -->
      @includeif('layouts.adminlte.contentHead')
      <!-- /.contentHead -->

      <!-- conteudo -->
      @yield('content')
      <!-- /.conteudo -->

    </div>

    <!-- footer -->
    @includeif('layouts.adminlte.footer')
    <!-- /.footer -->

  </div>

  <!-- js -->
  @includeif('layouts.adminlte.js')
  <!-- ./js -->
  
</body>
</html>


