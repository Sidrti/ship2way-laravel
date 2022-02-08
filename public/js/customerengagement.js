google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", { role: "style" } ],
    ["Sent", 8, "#007bff"],
    ["Delivered", 10, "#007bff"],
    ["Opened", 19, "#007bff"],
    ["Clicked Link", 21, "color: #007bff"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);

  var options = {
    title: "Shipment Notification Email",
    width: 600,
    height: 400,
    bar: {groupWidth: "50%"},
    legend: { position: "none" },
    vAxis:{textPosition: 'none' },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("shipment_notification"));
  chart.draw(view, options);
}

//Delivery Notification Email

google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawDeliveryNoticationColumnChart);
function drawDeliveryNoticationColumnChart() {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", { role: "style" } ],
    ["Sent", 18, "#007bff"],
    ["Delivered", 10, "#007bff"],
    ["Opened", 9, "#007bff"],
    ["Clicked Link", 21, "color: #007bff"]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);

  var options = {
    title: "Delivery Notification Email",
    width: 600,
    height: 400,
    bar: {groupWidth: "50%"},
    legend: { position: "none" },
    vAxis:{textPosition: 'none' },
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("delivery_notification"));
  chart.draw(view, options);
}
