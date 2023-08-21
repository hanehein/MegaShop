$(document).ready(function(){
    $("#search-input").keyup(function(){
        if($(this).val() != ""){
            $.ajax({
                url: "../../Controller/products/searchProductController.php",
                type: "POST",
                data: {
                    search_value : $(this).val(),
                    from_customer_searchproduct : ''
                },
                success: function (results) {
                    let products = JSON.parse(results);
                    $(".search-lists").empty();
                    $(products).each(function (index, product) {
                        $(".search-lists").append(
                            `
                            <div class="flex justify-between items-center p-2 bg-slate-300 border-b-2 cursor-pointer">
                                <div>
                                    <a href="../../Controller/products/productDetailsController.php?product_id=${product.id}">
                                        <img src="../../../${product.p_photo1}" class="h-[50px]" alt="">
                                    </a>
                                </div>
                                <p class="text-[#024486]">
                                    <a href="../../Controller/products/productDetailsController.php?product_id=${product.id}">
                                        ${product.p_name}
                                    </a>
                                </p>
                            </div>
                            `
                        );
  
                    })
                },
                error: function (errors) {
                    console.log(errors);
                }
            });
        }else{
            $(".search-lists").empty();
        } 
    })

    $('#mobile-search-input').keyup(function(){
        if($(this).val() != ""){
            $.ajax({
                url: "../../Controller/products/searchProductController.php",
                type: "POST",
                data: {
                    search_value : $(this).val(),
                    from_customer_searchproduct : ''
                },
                success: function (results) {
                    let products = JSON.parse(results);
                    $(".mobile-search-lists").empty();
                    $(products).each(function (index, product) {
                        $(".mobile-search-lists").append(
                            `
                            <div class="flex justify-between items-center p-2 bg-slate-300 border-b-2 cursor-pointer">
                                <div>
                                    <a href="../../Controller/products/productDetailsController.php?product_id=${product.id}">
                                        <img src="../../../${product.p_photo1}" class="h-[50px]" alt="">
                                    </a>
                                </div>
                                <p class="text-[#024486]">
                                    <a href="../../Controller/products/productDetailsController.php?product_id=${product.id}">
                                        ${product.p_name}
                                    </a>
                                </p>
                            </div>
                            `
                        );
  
                    })
                },
                error: function (errors) {
                    console.log(errors);
                }
            });
        }else{
            $(".mobile-search-lists").empty();
        } 
    })
})
