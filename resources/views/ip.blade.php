<html>
  <head>
    
    </head>
    <body>
      <header>
        <img src="{{asset('AdminLTE/dist/img/cabecalho.jpg')}}" width="100%">
      </header>

      <footer>          
        <div> <span class="pagenum" style="float: right; margin-right: 50px; font-size: 10;"></span>  </div></br>
        <div style="font-size: 13px; text-align: center;" >
          <span style="color: green; font-weight: bold;">Instituto Federal de Santa Catarina – Câmpus Florianópolis </span></br>
          Av. Mauro Ramos, 950 | Centro | Florianópolis /SC | CEP: 88.020-300</br>
          Fone: (48) 3211-6000 | www.ifsc.edu.br | CNPJ 11.402.887/0002-41
        </div>
      </footer>

      <main>
        @php
          echo gethostname(); // may output e.g,: sandie
          $h =gethostname();
        @endphp
          </br>
        @php
          echo gethostbyname($h); // may output e.g,: sandie
        @endphp
          </br>
        @php
          //echo get_ip_address(); // may output e.g,: sandie
        @endphp
          </br>

        @php
          //var_dump($_SERVER);
          //echo '<pre>';
          //print_r($_SERVER);
          //echo '<pre>';
        @endphp
            
      </main>
    </body>
</html>



