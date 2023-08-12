$(document).ready(function() {
    $("#search").keyup(function(){
        
        $.ajax({
            url: "../../Controller/searchCustomerController.php",//view from registerCustomer 
            type : "POST",
            data : {
                searchText : $(this).val()
            },
            success : function (res) {
                $("#searchResult").empty();
                let customers = JSON.parse(res);  
                console.log(customers);
                for (const customer of customers) {
                        $("#searchResult").append(
                            `
                            <tr class="h-10 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>${customer.id}</td>
                                <td><img src="../${customer.cus_photo}" width="100%" class="rounded-full w-10 h-10" alt="profile"></td>
                                <td>${customer.cus_name}</td>
                                <td>${customer.cus_email}</td>
                                <td>${customer.cus_phone}</td>
                                <td>${customer.gender}</td>
                                <td>${customer.township}</td>
                                <td>${customer.cus_address}</td>
                                <td>${customer.create_date}</td>
                                <td>${customer.notify}</td>
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