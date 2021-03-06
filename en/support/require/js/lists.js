var TableDatatablesEditable1 = function () {

    var handleTable = function () {

        function restoreRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);

            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                oTable.fnUpdate(aData[i], nRow, i, false);
            }

            oTable.fnDraw();
        }

        function editRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);
          //  jqTds[0].innerHTML = '<input disabled type="text" class="form-control input-small" value="' + aData[0] + '">';
           jqTds.innerHTML = aData[0] ;
            jqTds[1].innerHTML = '<input name="content" type="text" class="copy1 form-control input-small" value="' + aData[1] + '">';
          

            jqTds[2].innerHTML='<form style="display:inline" clas="edit" action="?id='+aData[0]+'&859&tname=ptype&content='+ aData[1] +'" method="post"><input type="hidden" class="copy1c" name="content" value="'+aData[1]+'"><button type="submit" onclick="$(this).parent(\'form\').submit();" class="btn btn-primary"> Save </button></form>',
            $(".copy1").keyup(function(){ $(".copy1c").val($(this).val()); });
          
            jqTds[3].innerHTML = '<a class="cancel" href="">Cancel</a>';
           
        }

        function saveRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 2, false);
            oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 3, false);
            oTable.fnDraw();
        }

        function cancelEditRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 2, false);
            oTable.fnDraw();
        }

        var table1 = $('#sample_editable_11');

        var oTable = table1.dataTable({

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
            // So when dropdowns used the scrollable div should be removed.
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // set the initial value
            "pageLength": 5,

            "language": {
                "lengthMenu": " _MENU_ "
            },
            "columnDefs": [{ // set default column settings
                'orderable': true,
                'visible': false,
                'searchable': false,
              //  'targets': [0]
            },{ 
                'orderable': true,
                'visible': false,
                'searchable': false,
              //  'targets': [2]
            }, {
                "searchable": true,
                "targets": [0]
            }],
            "order": [
                [2, "asc"]
            ] // set first column as a default sort by asc
        });

        var tableWrapper = $("#sample_editable_11_wrapper");

        var nEditing = null;
        var nNew = false;

        $('#sample_editable_11_new').click(function (e) {
            e.preventDefault();

            if (nNew && nEditing) {
                if (confirm("Previose row not saved. Do you want to save it ?")) {
                    saveRow(oTable, nEditing); // save
                    $(nEditing).find("td:first").html("Untitled");
                    nEditing = null;
                    nNew = false;

                } else {
                    oTable.fnDeleteRow(nEditing); // cancel
                    nEditing = null;
                    nNew = false;

                    return;
                }
            }

            var aiNew = oTable.fnAddData(['', '', '', '']);
            var nRow = oTable.fnGetNodes(aiNew[0]);
            editRow(oTable, nRow);
            nEditing = nRow;
            nNew = true;
        });

        table1.on('click', '.delete', function (e1) {
            e1.preventDefault();

            if (confirm("Are you sure to delete this row ?") == false) {
                return;
            }

            var nRow = $(this).parents('tr')[0];
            oTable.fnDeleteRow(nRow);
            alert("Deleted! Do not forget to do some ajax to sync with backend :)");
        });

        table1.on('click', '.cancel', function (e1) {
            e1.preventDefault();
            if (nNew) {
                oTable.fnDeleteRow(nEditing);
                nEditing = null;
                nNew = false;
            } else {
                restoreRow(oTable, nEditing);
                nEditing = null;
            }
        });

        table1.on('click', '.edit', function (e1) {
            e1.preventDefault();

            /* Get the row as a parent of the link that was clicked on */
            var nRow1 = $(this).parents('tr')[0];

            if (nEditing !== null && nEditing != nRow1) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow1);
                nEditing = nRow1;
            } else if (nEditing == nRow1 && this.innerHTML == "Save") {
                /* Editing this row and want to save it */
                saveRow(oTable, nEditing);
                nEditing = null;
                alert("Updated! Do not forget to do some ajax to sync with backend :)");
            } else {
                /* No edit in progress - let's start one */
                editRow(oTable, nRow1);
                nEditing = nRow1;
            }
        });
 
   
   
   
   
   
   
   
   
   
   
    }

    return {

        //main function to initiate the module
        init: function () {
            handleTable();
        }

    };
    








}();



var TableDatatablesEditable = function () {


    var handleTable = function () {
        
        
        function restoreRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);

            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                oTable.fnUpdate(aData[i], nRow, i, false);
            }

            oTable.fnDraw();
        }

        function editRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);
          //  jqTds[0].innerHTML = '<input disabled type="text" class="form-control input-small" value="' + aData[0] + '">';
           jqTds.innerHTML = aData[0] ;
            jqTds[1].innerHTML = '<input name="region" type="text" class="copy1 form-control input-small" value="' + aData[1] + '">';
           
            jqTds[2].innerHTML = '<input name="city" type="text" class="copy2 form-control input-small" value="' + aData[2] + '">';
          

            jqTds[3].innerHTML='<form style="display:inline" clas="edit" action="?id='+aData[0]+'&859&region='+ aData[1] +'" method="post"><input type="hidden" class="copy1c" name="region" value="'+aData[1]+'"><input type="hidden" class="copy2c" name="city" value="'+aData[2]+'"><button type="submit" onclick="$(this).parent(\'form\').submit();" class="btn btn-primary"> Save </button></form>',
            $(".copy1").keyup(function(){ $(".copy1c").val($(this).val()); });
            $(".copy2").keyup(function(){ $(".copy2c").val($(this).val()); });
           
            jqTds[4].innerHTML = '<a class="cancel" href="">Cancel</a>';
           
        }
        
      function saveRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 3, false);
            oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 4, false);
            oTable.fnDraw();
        }

        function cancelEditRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 3, false);
            oTable.fnDraw();
        }

        var table = $('#sample_editable_1');

        var oTable = table.dataTable({

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
            // So when dropdowns used the scrollable div should be removed.
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // set the initial value
            "pageLength": 5,

            "language": {
                "lengthMenu": " _MENU_ "
            },
            "columnDefs": [{ // set default column settings
                //'orderable': true,
                'targets': [0]
            },{
                //"searchable": true,
                "targets": [3],
                "searchable": false,
               // "visible": false
            }, {
                //"searchable": true,
               // "targets": [0],
                "searchable": false,
                "visible": false
            }],
             "buttons": [
               // { extend: 'print', className: 'btn dark btn-outline' },
                // { extend: 'pdf', className: 'btn green btn-outline' },
                //{ extend: 'csv', className: 'btn purple btn-outline ' },
                { extend: 'print', className: 'btn default' },
               // { extend: 'copy', className: 'btn default' },
                { extend: 'pdf', className: 'btn default' },
               // { extend: 'excel', className: 'btn default' },
               // { extend: 'csv', className: 'btn default' }
            ],
            
            "order": [
                [1, "asc"]
            ] // set first column as a default sort by asc
        });
        


        var tableWrapper = $("#sample_editable_1_wrapper");

        var nEditing = null;
        var nNew = false;

        $('#sample_editable_1_new').click(function (e) {
            e.preventDefault();

            if (nNew && nEditing) {
                if (confirm("Previose row not saved. Do you want to save it ?")) {
                    saveRow(oTable, nEditing); // save
                    $(nEditing).find("td:first").html("Untitled");
                    nEditing = null;
                    nNew = false;

                } else {
                    oTable.fnDeleteRow(nEditing); // cancel
                    nEditing = null;
                    nNew = false;

                    return;
                }
            }

            var aiNew = oTable.fnAddData(['', '', '', '']);
            var nRow = oTable.fnGetNodes(aiNew[0]);
            editRow(oTable, nRow);
            nEditing = nRow;
            nNew = true;
        });


            
        table.on('click', '.delete', function (e) {
            e.preventDefault();

            if (confirm("Are you sure to delete this row ?") == false) {
                return;
            }

            var nRow = $(this).parents('tr')[0];
            oTable.fnDeleteRow(nRow);
            alert("Deleted! Do not forget to do some ajax to sync with backend :)");
        });

        table.on('click', '.cancel', function (e) {
            e.preventDefault();
            if (nNew) {
                oTable.fnDeleteRow(nEditing);
                nEditing = null;
                nNew = false;
            } else {
                restoreRow(oTable, nEditing);
                nEditing = null;
            }
        });

        table.on('click', '.edit', function (e) {
            e.preventDefault();

            /* Get the row as a parent of the link that was clicked on */
            var nRow = $(this).parents('tr')[0];

            if (nEditing !== null && nEditing != nRow) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow);
                nEditing = nRow;
            } else if (nEditing == nRow && this.innerHTML == "Save") {
                /* Editing this row and want to save it */
                saveRow(oTable, nEditing);
                nEditing = null;
                alert("Updated! Do not forget to do some ajax to sync with backend :)");
            } else {
                /* No edit in progress - let's start one */
                editRow(oTable, nRow);
                nEditing = nRow;
            }
        });



        
    }

    return {

        //main function to initiate the module
        init: function () {
            handleTable();
        }

    };

}();



jQuery(document).ready(function() {
    TableDatatablesEditable1.init();
});
jQuery(document).ready(function() {
    TableDatatablesEditable.init();
});
