$(document).ready(function () {
    const pageList = Number($("#page-list").val());
    let currentActive = 1;

    $(".review-order").change(function () {
        removeActive();
        $(".pagination-page-btn:first").addClass("pagination-active");
        const orderValue = $(this).val()
        displayReviews(orderValue);
    });

    $(".pagination-page-btn").each(function(index, btn) {
        $(btn).click(function(){
            currentActive = Number($(this).text());
            removeActive();
            $(this).addClass("pagination-active");
            const orderValue = $(".review-order").val();
            const page = $(this).text();
            displayReviews(orderValue, page);
        })
    });

    $(".pagination-prev").click(function(){
        if(currentActive > 1){
            currentActive--;
            removeActive();
            $(`.pagination-page-btn:eq(${currentActive - 1})`).addClass("pagination-active");
            const orderValue = $(".review-order").val();
            const page = currentActive;
            displayReviews(orderValue, page);
        }
    });

    $(".pagination-next").click(function(){
        if(currentActive < pageList){
            currentActive++;
            removeActive();
            $(`.pagination-page-btn:eq(${currentActive - 1})`).addClass("pagination-active");
            const orderValue = $(".review-order").val();
            const page = currentActive;
            displayReviews(orderValue, page);
        }
    });

    function removeActive(){
        $(".pagination-page-btn").each(function(index, btn) {
            $(btn).removeClass("pagination-active")
        });
    }

    function displayReviews(orderValue,page = 1){
        $.ajax({
            url: "../../Controller/reviews/orderReviewController.php",
            type: "POST",
            data: {
                orderValue: orderValue,
                rowLimit : $('#row-limit').val(),
                page : page,
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
    }

});


