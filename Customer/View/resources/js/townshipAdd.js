$(document).ready(function () {
    $("#region").change(function(){
        const region = $(this).val();
        $.ajax({
            url: "../../Controller/cusTownshipAddController.php",//checkout View
            type: "POST",
            data: {
                region_id : region
            },
            success: function (results) {
                let townships = JSON.parse(results);
                $("#township").empty();
                $(townships).each(function (index, township) {
                 
                    $("#township").append(
                        `<option value="${township.id}">${township.name}</option>`
                    )
                });
                console.log(results);
            },
            error: function (errors) {
                console.log(errors);
            }
        });
    })
});