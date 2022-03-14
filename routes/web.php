<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Start Of Shipment Routes

Route::get('/shipment/shipped-recent', function () {
    return view('layouts.shipment.shipped.recent');
})->middleware("auth");

Route::get('/shipment/shipped-intransit', function () {
    return view('layouts.shipment.shipped.intransit');
})->middleware("auth");

Route::get('/shipment/shipped-delivered',function(){
    return view('layouts.shipment.shipped.delivered');
})->middleware("auth");

Route::get('/shipment/shipped-delivery-exception',function(){
    return view('layouts.shipment.shipped.deliveryException');
})->middleware("auth");

Route::get('/shipment/shipped-voided',function(){
    return view('layouts.shipment.shipped.voided');
})->middleware("auth");

Route::get('/shipment/fulfilment-recent',function(){
    return view('layouts.shipment.fulfilment.recent');
})->middleware("auth");

Route::get('/shipment/fulfilment-pending',function(){
    return view('layouts.shipment.fulfilment.pending');
})->middleware("auth");

Route::get('/shipment/fulfilment-intransit',function(){
    return view('layouts.shipment.fulfilment.intransit');
})->middleware("auth");

Route::get('/shipment/fulfilment-delivered',function(){
    return view('layouts.shipment.fulfilment.delivered');
})->middleware("auth");

Route::get('/shipment/fulfilment-delivery-exception',function(){
    return view('layouts.shipment.fulfilment.deliveryException');
})->middleware("auth");

Route::get('/shipment/fulfilment-cancelled',function(){
    return view('layouts.shipment.fulfilment.cancelled');
})->middleware("auth");

Route::get('/shipment/return',function(){
    return view('layouts.shipment.return');
})->middleware("auth");

Route::get('/shipment/return-recieved',function(){
    return view('layouts.shipment.returnRecieved');
})->middleware("auth");

Route::get('/shipment/end-of-day',function(){
    return view('layouts.shipment.endOfDay');
})->middleware("auth");

Route::get('/shipment/batch',function(){
    return view('layouts.shipment.batch');
})->middleware("auth");

// End Of Shipment Routes

// Start Of Insights Routes

Route::get('/insight/overview',function(){
    return view('layouts.insight.overview');
})->middleware("auth");

Route::get('/insight/sales',function(){
    return view('layouts.insight.sales');
})->middleware("auth");

Route::get('/insight/operation',function(){
    return view('layouts.insight.operation');
})->middleware("auth");

Route::get('/insight/customer-engagement',function(){
    return view('layouts.insight.customerEngagement');
})->middleware("auth");

Route::get('/insight/customer-overview',function(){
    return view('layouts.insight.customerOverview');
})->middleware("auth");

Route::get('/insight/product-highlight',function(){
    return view('layouts.insight.productHighlight');
})->middleware("auth");

Route::get('/insight/report',function(){
    return view('layouts.insight.report');
})->middleware("auth");

//End of Insight Routes

//Start of Product Routes
Route::get('/product/product',function(){
    return view('layouts.product.product');
})->middleware("auth");

Route::get('/product/preset-group',function(){
    return view('layouts.product.presetGroup');
})->middleware("auth");

Route::get('/product/reporting-category',function(){
    return view('layouts.product.reportingCategory');
})->middleware("auth");


Route::get('/product/inventory',function(){
    return view('layouts.product.inventory');
})->middleware("auth");

Route::get('/product/voidProduct',function(){
    return view('layouts.product.voidProduct');
})->middleware("auth");

Route::get('/product/availableProduct',function(){
    return view('layouts.product.availableProduct');
})->middleware("auth");

  
  //Start of Customer Routes
Route::get('/customer/customer',function(){
    return view('layouts.customer.customer');
})->middleware("auth");
//End of Customer Routes

//orders start
Route::get('/orders/awaitingPayment',function(){
    return view('layouts.orders.awaitingPayment');
})->middleware("auth");

Route::get('/orders/awaitingShipment',function(){
    return view('layouts.orders.awaitingShipment');
})->middleware("auth");

Route::get('/orders/cancelled',function(){
    return view('layouts.orders.cancelled');
})->middleware("auth");

Route::get('/orders/manualOrders',function(){
    return view('layouts.orders.manualOrders');
})->middleware("auth");

Route::get('/orders/onHold',function(){
    return view('layouts.orders.onHold');
})->middleware("auth");

Route::get('/orders/shipped',function(){
    return view('layouts.orders.shipped');
})->middleware("auth");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
