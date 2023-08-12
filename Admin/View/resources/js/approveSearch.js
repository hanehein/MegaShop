$(document).ready(function() {
    $("#search").keyup(function(){
        
        $.ajax({
            url: "../../Controller/approveSupplierSearchController.php",//view from approvelist
            type : "POST",
            data : {
                searchShop : $(this).val()
            },
            success : function (res) {
                $("#searchResult").empty();
                let approvedSuppliers = JSON.parse(res);  
                console.log(approvedSuppliers);
                for (const supplier of approvedSuppliers) {
                        $("#searchResult").append(
                            `
                            <tr class="h-10 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>${supplier.id}</td>
                                <td>${supplier.sup_name}</td>
                                <td>${supplier.sup_shop_name}</td>
                                <td>${supplier.sup_email}</td>
                                <td>${supplier.pack_id}</td>
                                <td>${supplier.township}</td>
                                <td>${supplier.view_count}</td>
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