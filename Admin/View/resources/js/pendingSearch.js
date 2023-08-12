$(document).ready(function() {
    $("#search").keyup(function(){
        
        $.ajax({
            url: "../../Controller/pendingSupplierSearchController.php",//view from pendinglist
            type : "POST",
            data : {
                searchPendingShop : $(this).val()
            },
            success : function (res) {
                $("#searchResult").empty();
                let pendingSuppliers = JSON.parse(res);  
                console.log(pendingSuppliers);
                for (const supplier of pendingSuppliers) {
                        $("#searchResult").append(
                            `
                            <tr class="h-10 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>${supplier.id}</td>
                                <td>${supplier.sup_name}</td>
                                <td>${supplier.sup_shop_name}</td>
                                <td>${supplier.sup_email}</td>
                                <td>${supplier.pack_id}</td>
                                <td>${supplier.township}</td>
                                <td>${supplier.sup_phone}</td>
                                <td>${supplier.bank_account}</td>
                                <td>${supplier.create_date}</td>
                            </tr>
                            `
                        )
                }
            },
            error : function (error) {
                console.log(error);
            }
        })
    });
});