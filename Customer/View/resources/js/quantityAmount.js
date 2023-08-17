$(document).ready(function () {
    let qty = 1;
    const MAX_STOCK = $("#stock_amt").val();
    $("#increase-qty").click(function () {
        if(qty < MAX_STOCK){
            qty++;
            $("#qty-amt").text(qty);
        }
    });

    $("#reduce-qty").click(function () {
        if (qty > 1) {
            qty--;
            $("#qty-amt").text(qty);
        }
    });


})