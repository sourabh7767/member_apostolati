var site_url = window.location.protocol + '//' + window.location.host;
$(document).on('click', '.delete-datatable-record', function(e){
    let url  = site_url + "/user/club/" + $(this).attr('data-id');
    let tableId = 'clubDataTable';
    deleteDataTableRecord(url, tableId);
});

$(document).ready(function() {
    console.log(site_url, '======site_url');
    $('#clubDataTable').DataTable({
        ajax: site_url + "/user/club/",
        // pageLength: 10,
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            { data: 'created_by', name: 'created_by' , orderable: false, searchable: false},
            { data: 'club_id', name: 'club_id' , orderable: false, searchable: false},
            { data: 'name', name: 'name' , orderable: false, searchable: false},
            { data: 'created_at', name: 'created_at' , orderable: false, searchable: false},
        ],
        ...defaultDatatableSettings,
        // createdRow: function ( row, data, index ) {
        //     console.log(row);
        //         $('td', row).eq(2).css('background-color', '#f4511e','color','#ffffff');
        //         // $('td', row).eq(4).css('color','#ffffff');
        // },
    });
});
$('#clubDataTable').on('draw.dt', function() {
    $('#clubDataTable tbody td').each(function() {
        // Add your custom logic here
        // Example: Add a class to each <td> element
        $(this).addClass('tableData');
    });
}); 


$("#upload_file").change(function(event){
    $("#pageloader").addClass("pageloader");
    $("#import_users").submit();
});



$(document).on('click',"#Understood",function(e){
    e.preventDefault();
    var formData = $("#ClubDataForm").serialize();
    // var formData = {
    //     club_id: $("#club_id").val(),
    //     name: $("#name").val()
    // };
    $.ajax({
        url: site_url + '/user/club',
        type: 'POST',
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        success: function (response) {
            if (response.success) {
              window.location.reload()
            }
        },
        error: (response) => {
        if(response.status === 422) {
            let errors = response.responseJSON.errors;
            $('.club_idError, .nameError').text('')
            Object.keys(errors).forEach(function (key) {
                let fieldName = key.split('.')[0];
                let index = key.split('.')[1];
                $("." + fieldName + "Error").eq(index).text(errors[key][0]);
            });
        }
    }
  });
  
    // handleAuth('user/login', formData , 'login');
});

