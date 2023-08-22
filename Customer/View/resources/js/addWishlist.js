$(document).ready(async function () {
    $(".add-wishlist-btn").each(function (index, btn) {
        $(btn).click(function () {
            const btn = $(this);
            const productID = Number($(this).find(".product-id").val());
            $.ajax({
                url: "../../Controller/wishlist/wishlistController.php",
                type: "POST",
                data: {},
                success: function (results) {
                    const productsInWishLists = JSON.parse(results);
                    const productIDsInWishlist = $.map(productsInWishLists, function (product) {
                        return product.product_id;
                    });

                    const isInWishlist = productIDsInWishlist.includes(productID)
                    if (isInWishlist) {
                        //remove from wishlist
                        $.ajax({
                            url: "../../Controller/wishlist/removeFromWishlistController.php",
                            type: "POST",
                            data: {
                                "product_id" : productID,
                                "from_wishlist_js" : ''
                            },
                            success: function (results) {
                                $(btn).find(".heart-icon").attr("name", "heart-outline");
                            },
                            error: function (errors) {
                            }
                        });
                        
                    } else {
                        //add into wishlist
                        $.ajax({
                            url: "../../Controller/wishlist/addIntoWishlistController.php",
                            type: "POST",
                            data: {
                                "product_id" : productID,
                                "from_wishlist_js" : ''
                            },
                            success: function (results) {
                                $(btn).find(".heart-icon").attr("name", "heart");
                            },
                            error: function (errors) {
                                console.log(errors);
                            }
                        });
                        
                    }
                },
                error: function (errors) {
                    console.log(errors);
                }
            });
        });
    });





});