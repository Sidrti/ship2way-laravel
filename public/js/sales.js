google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales ($)', 'Item Sold (Qty)'],
    ['2004',  1000,      400],
    ['2005',  1170,      460],
    ['2006',  660,       1120],
    ['2007',  1030,      540]
  ]);

  // var options = {
  //   title: 'Company Performance',
  //   curveType: 'function',
  //   legend: { position: 'bottom' }
  // };

  new google.visualization.LineChart(document.getElementById('line_graph_product_sold')).
  draw(data, {vAxes:[
    {title: 'Revenue', titleTextStyle: {color: '#00000'}, maxValue: 10}, // Left axis
    {title: 'Item Sold', titleTextStyle: {color: '#00000'}, maxValue: 20} // Right axis
  ],series:[
              {targetAxisIndex:1},
              {targetAxisIndex:0}
  ],} );
}
//Product SOld Pie Chart

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawSalesCategoryPieChart);

function drawSalesCategoryPieChart() {

  var data = google.visualization.arrayToDataTable([
    ['Product', 'Units Sold'],
    ['Sony',     4],
    ['Headset',      2],
    ['Denim Jeans',      1],
  ]);

  var options = {
    title: 'Sales By Categories'
  };

  var chart = new google.visualization.PieChart(document.getElementById('sales_category'));

  chart.draw(data, options);
}
