$(document).ready(function () {
  $("#search").keyup(function () {
    $.ajax({
      url: "../../Controller/searchCustomerController.php", //view from registerCustomer
      type: "POST",
      data: {
        searchText: $(this).val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let customers = JSON.parse(res);
        console.log(customers);
        for (const customer of customers) {
          //township
          let township = "";

          if (customer.township == 1) {
            township = "Yankin";
          } else if (customer.township == 2) {
            township = "Dagon";
          } else {
            township = "Kamayut";
          }
          //gender 
          let gender = "";
          if(customer.gender == 0) {gender = "Male";}
          else {gender = "Female";}
          $("#searchResult").append(
            `
                            <tr class="h-10 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>${customer.id}</td>
                                <td><img src="../${customer.cus_photo}" width="100%" class="rounded-full w-10 h-10" alt="profile"></td>
                                <td>${customer.cus_name}</td>
                                <td>${customer.cus_email}</td>
                                <td>${customer.cus_phone}</td>
                                <td>${gender}</td>
                                <td>${township}</td>
                                <td>${customer.cus_address}</td>
                                <td>${customer.create_date}</td>
                                <td><a href="../../Controller/customerNotifyController.php?id=${customer.id}"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-white hover:bg-[#66CC33]">Notify</button></a></td>
                            </tr>
                            `
          );
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  });
});
