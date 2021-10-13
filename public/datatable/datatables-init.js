(function ($) {
    //    "use strict";


    /*  Data Table
    -------------*/

    $.fn.dataTable.ext.errMode = 'throw';

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
        "language": {
            "lengthMenu": "Affichage _MENU_ écoles par page",
            "zeroRecords": "Aucune correspondance trouvée !!!",
            "info": "Vue page _PAGE_ / _PAGES_",
            "infoEmpty": "Aucune donnée trouvée !!!",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        "processing": false,
        "ajax": {
            url: "/ecoles", type: 'GET',
            complete: function (response) {
                //console.log(JSON.stringify(response));
            }
         },
        "columns": [
            {
                data: 'id',
                searchable: false, orderable: false,
                render: function (data, type, row) {
                    return '<span> ~ </span>';
                }
            },
            {
                data: 'libelle',
                searchable: true, orderable: true
            },
            { data: 'type' },
            {
                data: 'localite',
                searchable: true, orderable: true,
                render: function(data){
                    return '<span class="flex-row d-flex justify-content-between">'+data+'<i class="fas fa-map-marked"></i></span>';
                }
            },
            {
                data: 'cycle_1',
                searchable: false, orderable: false,
                className: 'text-center',
                render: function (data, type, row) {
                    if (data == 1) return '<span style="cursor: pointer;" class="fas fa-check"></span>'
                    else return '<span style="cursor: pointer;" class="fas fa-times"></span>'
                }
            },
            {
                data: 'cycle_2',
                className: 'text-center',
                searchable: false, orderable: false,
                render: function (data, type, row) {
                    if (data == 1) return '<span class="fas fa-check"></span>'
                    else return '<span class="fas fa-times"></span>'
                }
            },
            {
                data: 'id',
                className: 'text-center',
                searchable: false, orderable: false,
                render: function (data, type, row) {
                    return '<a class="link-consulter-filiere" style="cursor: progress;"  data-toggle="tooltip" data-placement="top" title="Informations sur les filières " href="#"> Filières d’étude <i class="fas fa-info-circle"></i> </a>';
                }
            },
        ]

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

    $('#row-select').DataTable({
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                    .appendTo($(column.footer()).empty())
                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function (d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
        }
    });

})(jQuery);
