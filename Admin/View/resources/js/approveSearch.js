$(document).ready(function () {
  $("#search").keyup(function () {
    $.ajax({
      url: "../../Controller/approveSupplierSearchController.php", //view from approvelist
      type: "POST",
      data: {
        searchShop: $(this).val(),
      },
      success: function (res) {
        $("#searchResult").empty();
        let approvedSuppliers = JSON.parse(res);
        // console.log(approvedSuppliers);
        for (const supplier of approvedSuppliers) {
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
                                <td><a href="../../Controller//supplierEditController.php?id=${supplier.id}"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
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