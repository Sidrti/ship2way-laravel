google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Returning', 'New Cust'],
        ['2012',  900,      390],
        ['2013',  1000,      400],
        ['2014',  1170,      440],
        ['2016',  1250,       480],
        ['2017',  1250,       480],
        ['2018',  1250,       480],
        ['2019',  1250,       480],
        ['2020',  1250,       480],
        ['2021',  1250,       480],
        ['2022',  1530,      540]
     ]);

      var view = new google.visualization.DataView(data);

      var options = {
        title: "",
        height: 400,
        bar: {groupWidth: "15%"},
        isStacked: true,
        legend: {  },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("shipments_charts"));
      chart.draw(view, options);
  }

//Geo Charts

  google.charts.load('current', {
    'packages':['geochart'],
  });
  google.charts.setOnLoadCallback(drawRegionsMap);

  function drawRegionsMap() {
    var data = google.visualization.arrayToDataTable([
      ['Country', 'Popularity'],
      ['Germany', 200],
      ['United States', 300],
      ['Brazil', 400],
      ['Canada', 500],
      ['France', 600],
      ['RU', 700]
    ]);

    var options = {
      title: "Order by State",
    };

    var chart = new google.visualization.GeoChart(document.getElementById('order_buyer_state'));

    chart.draw(data, options);
  }
 