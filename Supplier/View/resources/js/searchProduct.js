$(document).ready(function () {
    $("#searchInput").keyup(function () {
        $.ajax({
            url: "../../Controller/products/searchProductController.php",
            type: "POST",
            data: {
                searchValue: $(this).val(),
                from_searchproduct: ''
            },
            success: function (results) {
                let products = JSON.parse(results);
                $(".product-lists-container").empty();
                $(products).each(function (index, product) {
                    // Your code here
                    $(".product-lists-container").append(
                        `<tr class="hover:bg-slate-200">
                            <td class="px-6 py-4 ">
                                <div class="flex space-x-4 items-center">
                                    <img src="../../../${product['photo']}" class="w-[60px]" alt="product-img">
                                    <a href="../../Controller/products/productDetailController.php?product_id=${product['id']}" class="text-blue-500 underline">
                                    ${product['name']}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 ">
                                <span>${product['category']}</span>
                            </td>
                            <td class="px-6 py-4 ">
                                <span>${product['brand']}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span>${product['discount']} %</span>
                            </td>        
                            <td class="px-6 py-4">
                                <span>${product['sellprice']} MMK</span>
                            </td>
                            <td class="px-6 py-4">
                                <span>${product['buyprice']} MMK</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <button class="bg-green-500 px-3 py-1 rounded-md text-white font-semibold">
                                        <a href="../../Controller/products/editProductController.php?product_id=${product['id']}">Edit</a>
                                    </button>
                                    <button class="bg-red-500 px-3 py-1 rounded-md text-white font-semibold">
                                        <a href="../../Controller/products/deleteProductController.php?product_id=${product['id']}">Remove</a>
                                    </button>
                            </td>
                        </tr>`
                    )
                });
            },
            error: function (errors) {
                console.log(errors);
            }
        });
    })

});