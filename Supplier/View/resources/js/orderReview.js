$(document).ready(function () {

    $(".review-order").change(function () {
        $.ajax({
            url: "../../Controller/reviews/orderReviewController.php",
            type: "POST",
            data: {
                orderValue: $(this).val(),
                from_orderReview: ''
            },
            success: function (results) {
                reviewLists = JSON.parse(results);
                $(".review-lists").empty();
                $(reviewLists).each(function (index, review) {
                    $(".review-lists").append(
                        `<tr>
                            <td class="px-6 py-4">
                                <span>
                                    ${review.cus_name}
                                </span>
                            </td>
                            <td class="px-6 py-4 ">
                                <span>
                                    ${review.rating}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span>
                                    ${review.review}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="../../Controller/products/productDetailController.php?product_id=${review.p_id}" class="text-blue-500 underline">
                                    ${review.p_name}
                                </a>
                            </td>
                            <td class="px-6 py-4 ">
                                <span>
                                    ${review.create_date}
                                </span>
                            </td>
                        </tr>`
                    )
                })
            },
            error: function (errors) {
                console.log(errors);
            }
        });
    })

});


