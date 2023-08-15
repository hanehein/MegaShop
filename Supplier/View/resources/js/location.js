$(document).ready(function () {
    $("#region").change(function(){
        const region = $(this).val();
        $.ajax({
            url: "../../Controller/location/townshipListController.php",
            type: "POST",
            data: {
                region_id : region
            },
            success: function (results) {
                let townships = JSON.parse(results);
                $("#township").empty();
                $(townships).each(function (index, township) {
                    // Your code here
                    $("#township").append(
                        `<option value="${township.id}">${township.name}</option>`
                    )
                });
            },
            error: function (errors) {
                console.log(errors);
            }
        });
    })

});
