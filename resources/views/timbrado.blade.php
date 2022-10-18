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
      .pagenum:before {content: counter(page);}
      footer .pagenum:before {content: counter(page);}
    </style>
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

            <div>
              <p style="text-decoration:overline;margin-bottom: 35px;font-size: 12px;">Responsavel Tecnico Pelo Laudo<b></b></p>
              <p style="text-align: right;font-size: 12px;"> Florianópolis, <?php echo strftime('%d', strtotime('today')) ." de ". ucwords(strftime('%B', strtotime('today'))) ." de ". strftime('%Y', strtotime('today')); ?></p>
            </div>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
            <h1>Hello World</h1>
      </main>
    </body>
</html>


