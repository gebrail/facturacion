<script>
	$(document).ready(function() {
		$('#@yield('nombre-tabla', 'tabla')').DataTable( {
			"initComplete" : function() {
				$("#@yield('nombre-tabla', 'tabla')-table_filter input").prop( 'id', 'search_box' );},
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			],
			"ordering": false,
			"processing": true,
			"serverSide": true,
			"language": {
				"paginate": {
					"first":      "Primero",
					"previous":   "Anterior",
					"next":       "Siguiente",
					"last":       "Ultimo"},
				"processing": "Buscando Registro",
				"lengthMenu": "Ver _MENU_ registros por pagina",
				"zeroRecords": "Nada encontrado, lo siento",
				"info": "Mostrando página _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros disponibles",
				"search": "Busqueda por registro: ",
				"infoFiltered": "(Registro filtrado de _MAX_ registros)"},
			'ajax': {
				'url': '@yield('ruta-tabla', 'tabla')'
			},
			"columns":[
				@yield('datostabla')
			],
		});

	});

</script>