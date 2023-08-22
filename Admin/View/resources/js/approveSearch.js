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
          let region = "";

          if (supplier.region_id == 1) {
            region = "Kachin State";
          } else if (supplier.region_id == 2) {
            region = "Kayah State";
          } else if (supplier.region_id == 3) {
            region = "Kayin State";
          } else if (supplier.region_id == 4) {
            region = "Chin State";
          } else if (supplier.region_id == 5) {
            region = "Sagaing Region";
          } else if (supplier.region_id == 6) {
            region = "Tanintharyi Region";
          } else if (supplier.region_id == 7) {
            region = "Bago Region";
          } else if (supplier.region_id == 8) {
            region = "Mon State";
          } else if (supplier.region_id == 9) {
            region = "Magway Region";
          } else if (supplier.region_id == 10) {
            region = "Mandalay Region";
          } else if (supplier.region_id == 11) {
            region = "Shan State";
          } else if (supplier.region_id == 12) {
            region = "Yangon Region";
          } else if (supplier.region_id == 13) {
            region = "Rakhine State";
          } else if (supplier.region_id == 14) {
            region = "Ayeyarwady Region";
          } else {
            region = "Naypyidaw Union Territory";
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
                                <td>${region}</td>
                                <td>${supplier.sup_phone}</td>
                                <td>${supplier.bank_account}</td>
                                <td>${supplier.create_date}</td>
                                <td><a href="../../Controller/supplierEditController.php?id=${supplier.id}"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
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
