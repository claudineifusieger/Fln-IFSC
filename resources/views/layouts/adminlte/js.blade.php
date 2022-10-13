<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE DataTables -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>






<script>	
  $(function () {
    $("#laudos").DataTable({
      	"columnDefs": [{ 
      		"width": '5%', "targets": 0 ,
    		"width": '20%', "targets": 1 ,
    		"width": '20%', "targets": 2 ,
    		"width": '5%', "targets": 3 ,
    	}],
        "order": [[0, 'desc']],
    	"language": {"url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json" },
    });
  });
</script>

