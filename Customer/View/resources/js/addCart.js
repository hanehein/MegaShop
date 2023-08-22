$(document).ready(function(){
    $(".add-cart-btn").each(function(index, btn){
        $(btn).click(function(){
            const productID = Number($(this).find(".product-id").val());
            const supplierID = Number($(this).find(".supplier-id").val());
            $.ajax({
                url: "./../../Controller/shoppingcart/productListsController.php",
                type: "POST",
                data: {
                },
                success: function (results) {
                    let productsInCart = JSON.parse(results);
                    const productIDsInCart = $.map(productsInCart, function (product) {
                        return product.product_id;
                    });
                    const supplierIDsInCart = $.map(productsInCart, function (product) {
                        return product.supplier_id;
                    });
                    const hasProductsInCart = productsInCart.length != 0;
                    if(hasProductsInCart){
                        const fromSameStore = supplierIDsInCart.includes(supplierID);
                        if(fromSameStore){
                            const isInCart = productIDsInCart.includes(productID);
                            if(isInCart){
                                //increse qty
                                const currentProduct = productsInCart.filter(product => {
                                    return product.product_id == productID;
                                });
                                let currentProductQty = currentProduct[0].qty;
                                updateCart(productID, ++currentProductQty);
                            }else{
                                //add product into cart
                                addIntoCart(supplierID, productID);
                            }
                        }else{
                            window.alert("This Product can not be added.Please Add product from same stroe (or) Finish buying products from cart.")
                        }
                    }else{
                        //add product into cart
                        addIntoCart(supplierID, productID);
                    }
                },
                error: function (errors) {
                    alert("cann't add this product!");
                }
            });
        })
    });

    function addIntoCart(supplierID, productID, qty = 1, color = "", size = ""){
        $.ajax({
            url: "./../../Controller/shoppingcart/addCartController.php",
            type: "POST",
            data: {
                "supplier_id" : supplierID,
                "product_id" : productID,
                "product_qty" : qty,
                "product_color" : color,
                "product_size" : size,
                "from_addcart_js" : ''
            },
            success: function (results) {
                let totalProduct = Number($(".total_product_in_cart").text());
                $(".total_product_in_cart").text(++totalProduct);
                alert("1 new item have been added to your cart.Check Your Cart!")
            },
            error: function (errors) {
                alert("cann't add this product!");
            }
        });
    }

    function updateCart(productID, qty = 1, color = "", size = ""){
        $.ajax({
            url: "./../../Controller/shoppingcart/updateCartController.php",
            type: "POST",
            data: {
                "product_id" : productID,
                "product_qty" : qty,
                "product_color" : color,
                "product_size" : size,
                "from_addcart_js" : ''
            },
            success: function (results) {
                alert("1 new item have been added to your cart.Check Your Cart!")
            },
            error: function (errors) {
                alert("cann't add this product!");
            }
        });
    }

})