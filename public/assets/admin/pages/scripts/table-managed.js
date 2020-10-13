var TableManaged = function () {

    var tableNews = function () {

        var table = $('#table_noticias');

        // begin first table
        table.dataTable({
            "columns": [{
                "orderable": false
            }, {
                "orderable": false
            }, {
                "orderable": true
            }, {
                "orderable": false
            }],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "Todos"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5,            
            "pagingType": "bootstrap_full_number",
            "language": {
                "lengthMenu": "  _MENU_ registros",
                "paginate": {
                    "previous":"Ant.",
                    "next": "Sig.",
                    "last": "Último",
                    "first": "Primero"
                }
            },
            "columnDefs": [{
                "searchable": true,
                "targets": [0]
            }],
            "order": [
                [3, "asc"]
            ] // set first column as a default sort by asc            
        });

    }

    var tableUsers = function () {

        var table = $('#table_users');

        // begin first table
        table.dataTable({
            "columns": [{
                "orderable": true
            }, {
                "orderable": true
            }, {
                "orderable": true
            }, {
                "orderable": true
            }, {
                "orderable": true
            }, {
                "orderable": false
            }],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "Todos"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5,            
            "pagingType": "bootstrap_full_number",
            "language": {
                "lengthMenu": "  _MENU_ registros",
                "paginate": {
                    "previous":"Ant.",
                    "next": "Sig.",
                    "last": "Último",
                    "first": "Primero"
                }
            },
            "columnDefs": [{  // set default column settings
                'orderable': false,
                'targets': [0]
            }, {
                "searchable": true,
                "targets": [0]
            }],
            "order": [
                [1, "asc"]
            ] // set first column as a default sort by asc
        });

    }    



    return {

        //main function to initiate the module
        init: function () {
            if (!jQuery().dataTable) {
                return;
            }

            tableNews();
            tableUsers();
        }

    };

}();