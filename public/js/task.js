$(document).ready(function(){
    $(document).on('submit','#form',function(e) {
        e.preventDefault();
        requestData = $(this).serializeArray();
        
        console.log(requestData);
        
        var val = $('input[name=func]:checked').val();
        var url = "task/" + val;
        
        $.ajax({
            url: url,
            type: "post",
            data: requestData,
            success: function (responseData) {
                console.log(responseData);
                $("#result").html(responseData);
            },                               
            error: function(e){
                console.log(e.message);
            }
        });
    });
    return false;
});