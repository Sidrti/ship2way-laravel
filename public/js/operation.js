$(document).ready( function () {
  $('#tbUser').DataTable();
} );


google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "role" } ],
        ["01/01", 8.94, "#b8333"],
        ["01/02", 10.49, "silver"],
        ["01/02", 19.30, "gold"],
        ["01/02", 21.45, "color: #e5e4e2"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        ["01/02", 19.30, "gold"],
        
      ]);

      var view = new google.visualization.DataView(data);
    //   view.setColumns([0, 1,
    //                    { calc: "stringify",
    //                      sourceColumn: 1,
    //                      type: "string",
    //                      role: "annotation" },
    //                    2]);

      var options = {
        title: "",
        height: 400,
        bar: {groupWidth: "15%"},
        legend: { position: "none" },
        vAxis:{"title":"Shipments","minValue":0},
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("shipments_charts"));
      chart.draw(view, options);
  }

  //Donought Chart
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawDonoughtChart);
  function drawDonoughtChart() {
    var data = google.visualization.arrayToDataTable([
      ['Carriers', 'Total Number'],
      ['USPS',     11],
      ['FedEx',      2],
      ['Asendia',  2],
    ]);

    var options = {
      title: 'Shipments by carrier',
      pieHole: 0.6,
      
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('shipment_carrier'));
    chart.draw(data, options);
  }

//Column Chart Shipmenty by carrier
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawColumnShipmentChart);
  function drawColumnShipmentChart() {
    var data = google.visualization.arrayToDataTable([
        ['Genre', 'Fantasy & Sci Fi', 'Romance', 'Mystery/Crime', 'General',
         'Western', 'Literature', { role: 'annotation' } ],
        ['Standard', 10, 24, 20, 32, 18, 5, ''],
        ['Economy', 16, 22, 23, 30, 16, 9, ''],
        ['Overnight', 28, 19, 29, 30, 12, 13, '']
      ]);

    var view = new google.visualization.DataView(data);

    var options = {
      title: "Shipment By Class",
      height: 300,
      width:500,
      bar: {groupWidth: "15%"},
      legend: { position: "none" },
      vAxis:{textPosition: 'none' },
     
      isStacked: true,
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("shipment_class"));
    chart.draw(view, options);
}
//Shipment By User Bar Graph

google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawBarShipmentUserChart);
function drawBarShipmentUserChart() {
    var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Miguel Cazares", 8.94, "green"],
        ["Courtney Mirenzi", 06, "green"],
        ["Donald Vida", 19.30, "green"],
      ]);

  var view = new google.visualization.DataView(data);

  var options = {
    title: "Shipment By User",
    height: 300,
  
    bar: {groupWidth: "15%"},
    legend: { position: "none" },

  };
  var chart = new google.visualization.BarChart(document.getElementById("shipment_user"));
  chart.draw(view, options);
}

//Column Chart OrderAging 
google.charts.load("current", {packages:['corechart']});
google.charts.setOnLoadCallback(drawColumnOrderAgingChart);
function drawColumnOrderAgingChart() {
  var data = google.visualization.arrayToDataTable([
      ['Genre', 'Fantasy & Sci Fi', 'Romance', 'Mystery/Crime', 'General',
       'Western', 'Literature', { role: 'annotation' } ],
      ['3+ Days', 10, 24, 20, 32, 18, 5, ''],
      ['2 days', 16, 22, 23, 30, 16, 9, ''],
      ['1 day', 28, 19, 29, 30, 12, 13, '']
    ]);

  var view = new google.visualization.DataView(data);

  var options = {
    title: "Open Order Aging",
    height: 300,
    width:500,
    bar: {groupWidth: "15%"},
    legend: { position: "none" },
    vAxis:{textPosition: 'none' },
   
    isStacked: true,
  };
  var chart = new google.visualization.ColumnChart(document.getElementById("order_aging"));
  chart.draw(view, options);
}