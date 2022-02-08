google.charts.load('current', { packages: ['corechart', 'line'] });
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

  var data = new google.visualization.DataTable();
  data.addColumn('number', 'X');
  data.addColumn('number', 'Month');

  data.addRows([
    [0, 0], [1, 10], [2, 23], [3, 17], [4, 18], [5, 9],
    [6, 11], [7, 27], [8, 33], [9, 40], [10, 32], [11, 35],
    [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
    [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
    [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
    [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
    [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
    [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
    [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
    [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
    [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
    [66, 70], [67, 72], [68, 75], [69, 80]
  ]);

  var options = {
    hAxis: {
      title: 'Time'
    },
    vAxis: {
      title: 'Amount (in $)'
    }
  };

  var chart = new google.visualization.LineChart(document.getElementById('earn_line_graph'));

  chart.draw(data, options);
}

//Donought Chart
google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawDonoughtChart);
function drawDonoughtChart() {
  var data = google.visualization.arrayToDataTable([
    ['Carriers', 'Total Number'],
    ['USPS', 11],
    ['FedEx', 2],
  ]);

  var options = {
    title: 'Shipments by carrier',
    pieHole: 0.6,


  };

  var chart = new google.visualization.PieChart(document.getElementById('shipment_carrier'));
  chart.draw(data, options);
}

//Donought Chart Delivery
google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawDeliveryDonoughtChart);
function drawDeliveryDonoughtChart() {
  var data = google.visualization.arrayToDataTable([
    ['Time', 'Total Number'],
    ['OnTime', 11],
    ['Inprogress', 2],
    ['Delayed', 2],
  ]);

  var options = {
    title: 'Delivery',
    pieHole: 0.6,
  };

  var chart = new google.visualization.PieChart(document.getElementById('delivery'));
  chart.draw(data, options);
}

//Sales Line Graph

google.charts.load('current', { packages: ['corechart', 'line'] });
google.charts.setOnLoadCallback(drawSalesLineChart);

function drawSalesLineChart() {

  var data = new google.visualization.DataTable();
  data.addColumn('number', 'X');
  data.addColumn('number', 'Month');

  data.addRows([
    [0, 0], [1, 10], [2, 23], [3, 17], [4, 18], [5, 9],
    [6, 11], [7, 27], [8, 33], [9, 40], [10, 32], [11, 35],
    [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
    [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
    [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
    [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
    [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
    [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
    [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
    [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
    [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
    [66, 70], [67, 72], [68, 75], [69, 80]
  ]);

  var options = {
    hAxis: {
      title: 'Time'
    },
    vAxis: {
      title: 'Amount (in $)'
    },
    title: 'Sales Over Time',
  };

  var chart = new google.visualization.LineChart(document.getElementById('total_sales'));

  chart.draw(data, options);
}

//Sales Line Graph Sessions Over Time

google.charts.load('current', { packages: ['corechart', 'line'] });
google.charts.setOnLoadCallback(drawSessionsLineChart);

function drawSessionsLineChart() {

  var data = new google.visualization.DataTable();
  data.addColumn('number', 'X');
  data.addColumn('number', 'Month');

  data.addRows([
    [0, 0], [1, 10], [2, 23], [3, 17], [4, 18], [5, 9],
    [6, 11], [7, 27], [8, 33], [9, 40], [10, 32], [11, 35],
    [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
    [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
    [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
    [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
    [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
    [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
    [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
    [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
    [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
    [66, 70], [67, 72], [68, 75], [69, 80]
  ]);

  var options = {
    hAxis: {
      title: 'Time'
    },
    vAxis: {
      title: 'Amount (in $)'
    },
    title: 'Sessions Over Time',
  };

  var chart = new google.visualization.LineChart(document.getElementById('session_over_time'));

  chart.draw(data, options);
}
google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawAreaChart);

function drawAreaChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'First Time', 'Returning'],
    ['2013', 1000, 400],
    ['2014', 1170, 460],
    ['2015', 660, 1120],
    ['2016', 1030, 540]
  ]);

  var options = {
    title: 'Customers',
    hAxis: { title: 'Year', titleTextStyle: { color: '#333' } },
    vAxis: { minValue: 0 }
  };

  var chart = new google.visualization.AreaChart(document.getElementById('returning_customer_rate'));
  chart.draw(data, options);
}


// Line Graph Avg Order Value

google.charts.load('current', { packages: ['corechart', 'line'] });
google.charts.setOnLoadCallback(drawAvgOrderValueLineChart);

function drawAvgOrderValueLineChart() {

  var data = new google.visualization.DataTable();
  data.addColumn('number', 'X');
  data.addColumn('number', 'Month');

  data.addRows([
    [0, 0], [1, 10], [2, 23], [3, 17], [4, 18], [5, 9],
    [6, 11], [7, 27], [8, 33], [9, 40], [10, 32], [11, 35],
    [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
    [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
    [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
    [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
    [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
    [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
    [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
    [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
    [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
    [66, 70], [67, 72], [68, 75], [69, 80]
  ]);

  var options = {
    hAxis: {
      title: 'Time'
    },
    vAxis: {
      title: 'Amount (in $)'
    },
  };
  var chart = new google.visualization.LineChart(document.getElementById('avg_order_value'));
  chart.draw(data, options);
}

// Line Graph Total Orders

google.charts.load('current', { packages: ['corechart', 'line'] });
google.charts.setOnLoadCallback(drawTotalOrderLineChart);

function drawTotalOrderLineChart() {

  var data = new google.visualization.DataTable();
  data.addColumn('number', 'X');
  data.addColumn('number', 'Month');

  data.addRows([
    [0, 0], [1, 10], [2, 23], [3, 17], [4, 18], [5, 9],
    [6, 11], [7, 27], [8, 33], [9, 40], [10, 32], [11, 35],
    [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
    [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
    [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
    [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
    [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
    [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
    [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
    [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
    [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
    [66, 70], [67, 72], [68, 75], [69, 80]
  ]);

  var options = {
    hAxis: {
      title: 'Time'
    },
    vAxis: {
      title: 'Amount (in $)'
    },
  };
  var chart = new google.visualization.LineChart(document.getElementById('total_orders'));
  chart.draw(data, options);
}
