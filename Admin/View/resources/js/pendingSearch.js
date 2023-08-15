$(document).ready(function () {
  $("#search").keyup(function () {
    $.ajax({
      url: "../../Controller/pendingSupplierSearchController.php", //view from pendinglist
      type: "POST",
      data: {
        searchPendingShop: $(this).val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let pendingSuppliers = JSON.parse(res);
        console.log(pendingSuppliers);
        for (const supplier of pendingSuppliers) {
          //packType
          let packType = "";
          if (supplier.pack_id === 0) {
            packType = "Basic";
          } else if (supplier.pack_id === 1) {
            packType = "Silver";
          } else {
            packType = "Gold";
          }
          //township
          let township = "";

          if (supplier.township == 1) {
            township = "Yankin";
          } else if (supplier.township == 2) {
            township = "Dagon";
          } else {
            township = "Kamayut";
          }
          $("#searchResult").append(
            `               
                            <tr class="h-10 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>${supplier.id}</td>
                                <td>${supplier.sup_name}</td>
                                <td>${supplier.sup_shop_name}</td>
                                <td>${supplier.sup_email}</td>
                                <td>${packType}</td>
                                <td>${supplier.pack_actual_duration}&nbsp;months</td>
                                <td>${township}</td>
                                <td>${supplier.sup_phone}</td>
                                <td>${supplier.bank_account}</td>
                                <td>${supplier.create_date}</td>
                                <td><a href="../../Controller/approveController.php?id=${supplier.id}"><button value="" class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Approve</button></a></td>
                                <td><a href="../../Controller/deniedController.php?id=${supplier.id}"><button value="" class="w-16 py-1 rounded-md bg-gray-700 text-white text-xs hover:text-red-600 hover:bg-gray-700">Denied</button></a></td>
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
