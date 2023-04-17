function editCustomerData(id, baseURL) {

  $.session.set("id", id);

  $.ajax({
    type: 'POST',
    url: baseURL + "index.php/SaveData/getDataById?id=" + id,
    dataType: "json",

    success: function (data) {
      var carData = JSON.stringify(data);
      //console.log(data[0]);
      //console.log(data);
      $('#carName').val(data[0].car_name);
      $('#company').val(data[0].car_make);
      $('#vehicleType').val(data[0].used_type);
      $('#mileage').val(data[0].car_mileage);
      $('#engineSize').val(data[0].car_engine_size);
      $('#power').val(data[0].car_power);
      $('#fuelType').val(data[0].car_fuel_type);
      $('#gear').val(data[0].car_gear);
      $('#seat').val(data[0].car_seats);
      $('#price').val(data[0].car_price);
      $('#yearOfPurchase').val(data[0].car_year);
      $('#kilometerDriven').val(data[0].car_kilometer);
    }
  });
}

function saveData(baseURL) {
  var id = $.session.get("id");
  var carName = $('#carName').val();
  var company = $('#company').val();
  var vehicleType = $('#vehicleType').val();
  var mileage = $('#mileage').val();
  var engineSize = $('#engineSize').val();
  var power = $('#power').val();
  var fuelType = $('#fuelType').val();
  var gear = $('#gear').val();
  var seat = $('#seat').val();
  var price = $('#price').val();
  var yearOfPurchase = $('#yearOfPurchase').val();
  var kilometerDriven = $('#kilometerDriven').val();

  if (carName != "" && company != "" && vehicleType != "" && mileage != "" && engineSize != "" && power != "" && fuelType != "" && gear != "" && seat != "" && price != "" && yearOfPurchase != "" && kilometerDriven != "") {
    $.ajax({
      url: baseURL + "index.php/SaveData/updateDataById?id=" + id,
      type: "POST",
      data: {
        carName: carName,
        company: company,
        vehicleType: vehicleType,
        mileage: mileage,
        engineSize: engineSize,
        power: power,
        fuelType: fuelType,
        gear: gear,
        seat: seat,
        price: price,
        yearOfPurchase: yearOfPurchase,
        kilometerDriven: kilometerDriven
      },
      cache: false,
      async: false,
      success: function (response) {

        //$('#datatablesSimple').load(" #datatablesSimple");
        window.location.reload();

      }
    });
  }
}


function deleteCustomerDataById(id, baseURL) {

  $.ajax({
    type: 'POST',
    url: baseURL + "index.php/SaveData/deleteCustomerDataById?id=" + id,
    async: false,
    success: function (data) {
      //$('#datatablesSimple').load(" #datatablesSimple");
      window.location.reload();

    }
  });
}