$(document).ready(function(){
    $("#mobile-search-input").keyup(function(){
        $.ajax({
            url: "../../Controller/products/searchProductController.php",
            type: "POST",
            data: {
                searchValue: $(this).val(),
                from_customer_searchproduct: ''
            },
            success: function (results) {
                console.log(results);
            },
            error: function (errors) {
                console.log(errors);
            }
        });
    })
})