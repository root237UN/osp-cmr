(function ($) {
    //    "use strict";


    /*  Data Table
    -------------*/

    $('#bootstrap-data-table').DataTable({
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
    });

    $('#data-ecoles').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tout"]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        "language": {
            "lengthMenu": "Affichage _MENU_ écoles par page",
            "zeroRecords": "Aucune correspondance trouvée !!!",
            "info": "Vue page _PAGE_ / _PAGES_",
            "infoEmpty": "Aucune donnée trouvée !!!",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }

    });

    $('#data-ecoles-visitor').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tout"]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],

    });

    $('#data-localites').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tout"]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        "language": {
            "lengthMenu": "Affichage _MENU_ localité par page",
            "zeroRecords": "Aucune correspondance trouvée !!!",
            "info": "Vue page _PAGE_ / _PAGES_",
            "infoEmpty": "Aucune donnée trouvée !!!",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });

	$('#row-select').DataTable( {
        initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		} );

})(jQuery);
