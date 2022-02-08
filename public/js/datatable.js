$(document).ready( function () {
    var extensions = {
        "sFilter": "dataTables_filter search-box",
    }
    // Used when bJQueryUI is false
    $.extend($.fn.dataTableExt.oStdClasses, extensions);
    // Used when bJQueryUI is true
    $.extend($.fn.dataTableExt.oJUIClasses, extensions);
    $('table').dataTable({
        // "bInfo": false, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
        //  "paging": false,//Dont want paging                
        //  "bPaginate": false,//Dont want paging   
         language: { search: '', searchPlaceholder: "Search Table" },
         "scrollX": true
    });
    
} );
// $('body').overlayScrollbars({});
$( "#print" ).click(function() {
    PrintTable();
  });

function PrintTable() {
    window.print();
}
$('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
  )
 $(function() {
  //The passed argument has to be at least a empty object or a object with your desired options
  $('body').overlayScrollbars({ overflowBehavior : {	
  }});
  $('.dataTables_scroll').overlayScrollbars({ overflowBehavior : {
    x :"scroll",
    y :	"scroll" 	
  }});
});

$('#export').click(function() {
  $('#modal').modal('show');
});
$('.customer').click(function() {
  $('#customerProfileModal').modal('show');
  $('.modal-backdrop').remove();
});

$('.trackingNumber').click(function() {
  $('#trackingNumberModal').modal('show');
  $('.modal-backdrop').remove();
});
$('.order').click(function() {
  $('#trackingNumberModal').modal('show');
  $('.modal-backdrop').remove();
});
$('.carrier').click(function() {
  $('#carrierModal').modal('show');
  $('.modal-backdrop').remove();
});
$('.warehouse').click(function() {
  $('#warehouseModal').modal('show');
  $('.modal-backdrop').remove();
});
$('table td:nth-child(3)').click(function() {
  $('#trackingNumberModal').modal('show');
  $('.modal-backdrop').remove();
});
$('table td:nth-child(5)').click(function() {
  $('#customerProfileModal').modal('show');
  $('.modal-backdrop').remove();
});

$('table td:nth-child(6)').click(function() {
  $('#carrierModal').modal('show');
  $('.modal-backdrop').remove();
});

$('table td:nth-child(8)').click(function() {
  $('#trackingNumberModal').modal('show');
  $('.modal-backdrop').remove();
});
$('table td:nth-child(9)').click(function() {
  $('#warehouseModal').modal('show');
  $('.modal-backdrop').remove();
});

