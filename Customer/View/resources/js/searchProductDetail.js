$document.ready(function() {
    $("#voice_search").keyup(function(){
        $.ajax({
            url:"../../../Controller/shop/searchProductDetail.php",
            type:"POST",
            data:{
                searchText : $(this).val()
            },
            success: function (res){
                let products = JSON.parse(res);
                for(const products of product){
                    $("#searchResult").append(
                        ``
                    )
                }
            },
            error: function (error){

            }
        })
    });
});