<html>
  <head>
    <style>
      @page {
          margin: 0cm 0cm;
      }

      /** Define now the real margins of every page in the PDF **/
      body {
          margin-top: 3cm;
          margin-left: 2cm;
          margin-right: 2cm;
          margin-bottom: 2cm;
      }

      /** Define the header rules **/
      header {
          position: fixed;
          top: 0.3cm;
          left: 0.3cm;
          right: 0.3cm;
          height: 3cm;
      }

      /** Define the footer rules **/
      footer {
          position: fixed; 
          bottom: 0cm; 
          left: 0cm; 
          right: 0cm;
          height: 2cm;
      }
    </style>
    </head>
    <body>
      <header>
        <img src="{{asset('AdminLTE/dist/img/cabecalho.jpg')}}" width="100%">
      </header>

      <footer>  
        <div style="font-size: 13px; text-align: center;" >
          <span style="color: green; font-weight: bold;">Instituto Federal de Santa Catarina – Câmpus Florianópolis </span></br>
          Av. Mauro Ramos, 950 | Centro | Florianópolis /SC | CEP: 88.020-300</br>
          Fone: (48) 3211-6000 | www.ifsc.edu.br | CNPJ 11.402.887/0002-41
        </div>
      </footer>

      <main>

      <!-- conteudo -->
      @yield('content')
      <!-- /.conteudo -->

      </main>
    </body>
</html>


