jQuery(document).ready(function ($) {
    
    $('#sendAjaxrequest').on('click', function (event) {
    
        $.ajax({
            url: my_ajax_object.ajax_url,
            type: 'post',
            dataType: 'json',
            data: {
                action: 'calculate_operation',
                numbOne: 30,
                numbTwo: 25
            },
            success: function(response) {
                alert(response.message);
            },
            error: function(error) {
                // alert("There was an error: " + err);
            }
    
        });
    
    });
    
});