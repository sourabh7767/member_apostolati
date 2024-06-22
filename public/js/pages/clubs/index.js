$(document).on('click', '.delete-datatable-record', function(e){
    let url  = site_url + "/clubs/" + $(this).attr('data-id');
    let tableId = 'clubTable';
    deleteDataTableRecord(url, tableId);
});

$(document).ready(function() {
    console.log(site_url, '======site_url');
    $('#clubTable').DataTable({
        ajax: site_url + "/clubs/",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            { data: 'created_by', name: 'created_by' },
            { data: 'club_name', name: 'club_name' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        ...defaultDatatableSettings
    });
});

$("#upload_file").change(function(event){
    $("#pageloader").addClass("pageloader");
    $("#import_users").submit();
});
// $(document).on('change',"#filterBy",function(){
//     var filterBy = $(this).val();
//     alert(filterBy);
// });


$(document).on('click', '.delete-datatable-record', function(e){
    let url  = site_url + "/admin/club/list/name/delete/" + $(this).attr('data-id');
    let tableId = 'clubsNameList';
    deleteDataTableRecord(url, tableId);
});

$(document).ready(function() {
    console.log(site_url, '======site_url');
   var listTable = $('#clubsNameList').DataTable({
        ajax: {
            url: site_url + "/admin/club/list/name",
            type: 'GET',
            data: function(d) {
                // Add custom data here
                d.filterBy = $('#filterBy option:selected').val();
                // Add more custom parameters as needed
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            { data: 'created_by', name: 'created_by' , orderable: false, searchable: false},
            { data: 'club_id', name: 'club_id' , orderable: false, searchable: false},
            { data: 'name', name: 'name' , orderable: false, searchable: false},
            { data: 'created_at', name: 'created_at' , orderable: false, searchable: false},
            { data: 'action', name: 'action' , orderable: false, searchable: false},
        ],
        ...defaultDatatableSettings
    });
    $(document).on('change',"#filterBy",function(){
        listTable.ajax.reload();
    });
});
