$(document).ready(function () {
  $("#search").keyup(function () {
    $.ajax({
      url: "../../Controller/subIncomeSearchController.php", //view from adminSubscriptionIncome
      type: "POST",
      data: {
        searchShop: $(this).val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let approvedSuppliers = JSON.parse(res);
        // console.log(approvedSuppliers);
        for (const supplier of approvedSuppliers) {
          //packtype
          let packType = "";
          if (supplier.pack_id === 0) {
            packType = "Basic";
          } else if (supplier.pack_id === 1) {
            packType = "Silver";
          } else {
            packType = "Gold";
          }
          //totalamount
          let totalAmt = 0;
          if (supplier.pack_id === 1) {
            totalAmt = supplier.pack_actual_duration * 100000;
          } else if (supplier.pack_id === 2) {
            totalAmt = supplier.pack_actual_duration * 150000;
          }
          let formattedTotalAmt = new Intl.NumberFormat("en-US").format(
            totalAmt
          );
          //expired date 
          let createdDateString = supplier.create_date;
          let durationMonths = supplier.pack_actual_duration;
          
          let createdDate = new Date(createdDateString);
          let expiredDate = new Date(createdDate);
          
          expiredDate.setMonth(expiredDate.getMonth() + durationMonths);
          
          while (expiredDate < createdDate) {
            expiredDate.setMonth(expiredDate.getMonth() + 1);
          }

          let year = expiredDate.getFullYear();
          let month = (expiredDate.getMonth() + 1).toString().padStart(2, '0');
          let day = expiredDate.getDate().toString().padStart(2, '0');
          let expiredFormatted = year + '-' + month + '-' + day;
          $("#searchResult").append(
            `
                            <tr class="h-10 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>${supplier.id}</td>
                                <td>${supplier.sup_shop_name}</td>
                                <td>${supplier.sup_email}</td>
                                <td>${packType}</td>
                                <td>${supplier.pack_actual_duration}&nbsp;months</td>
                                <td>${supplier.bank_account}</td>
                                <td>${formattedTotalAmt}&nbsp;MMK</td>
                                <td>${supplier.create_date}</td>
                                <td>${expiredFormatted}</td>
                                <td><a href="../../Controller/subscriptionEditController.php?id=${supplier.id}"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
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
