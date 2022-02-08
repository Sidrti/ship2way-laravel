@extends('layouts.app')

@push('page_scripts')
<script src="{{asset('js/customerengagement.js')}}" type="text/javascript" defer></script>
@endpush

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer Engagement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Operations</li>
            </ol>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
              Your Package Unit Is Running Out And You Need To Upgrade To Other Package.
            </div>
          </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <div class="dropdown show">
                    <a class="btn btn-light border dropdown-toggle" style="width: 150px;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      All Stores
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Amazon</a>
                      <a class="dropdown-item" href="#">Flexpay</a>
                      <a class="dropdown-item" href="#">Market</a>
                    </div>
                  </div>
            </div>
            <div class="col-2">
              <input type="button" class="btn btn-block btn-outline-secondary" id="daterange-btn">
            </div>
        </div>
        

      </div>
    </section>
    <section class="content">
        <div class="container-fluid mt-4">
          <div class="row">
            <div class="col">
              <!-- small card -->
             
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>6213</h3>

                  <p>Unit Shipped</p>
                </div>
                <div class="icon">
                  <i class="fas fa-shopping-cart"></i>
                </div>

              </div>
              
            </div>
            <div class="col">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>$ 150</h3>

                  <p>Amount Of Sell</p>
                </div>
                <div class="icon">
                  <i class="fas fa-dollar-sign"></i>
                </div>

              </div>
            </div>
            <div class="col">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>$ 150</h3>

                  <p>Customer Visit</p>
                </div>
                <div class="icon">
                  <i class="fas fa-dollar-sign"></i>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>$ 150</h3>

                  <p>Customer Sell</p>
                </div>
                <div class="icon">
                  <i class="fas fa-dollar-sign"></i>
                </div>

              </div>
            </div>
            <div class="col">
              <!-- small card -->
              <a>
              <div class="small-box bg-info" data-toggle="modal" data-target="#sell_model">
                <div class="inner">
                  <h3>$ 150</h3>

                  <p>Customerwise Sell</p>
                </div>
                <div class="icon">
                  <i class="fas fa-dollar-sign"></i>
                </div>

              </div>
              </a>
            </div>
          </div>

           
          </div>
          <div class="row">
              <div class="col-6">
                <div id="shipment_notification"></div>
              </div>
              <div class="col-6">
                <div id="delivery_notification" ></div>
              </div>

          </div>
          <div class="row mt-4">
            <div class="col">
             
            <h3>Tracking Page Visitor</h3>
                <div class="card">
                    <div class="card-header">
                      <h4 class="text-center"><b>510 </b><br> Total Customer Visit</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                           
                            <td>Unique Customers</td>
                            <td>1000</td>
                          </tr>
                          <tr>
                           
                            <td>Returning Customer</td>
                            <td>2000</td>
                          </tr>
                          <tr>
                           
                            <td>Avg. Visits Per Customers</td>
                            <td>3.21</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>



            </div>
            <div class="col">
                <div class="col">
             
                    <h3>Tracking Page Engagement</h3>
                        <div class="card">
                         
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                              <table class="table table-bordered">
                                  <thead>
                                      <th>
                                         Engagement Type
                                      </th>
                                      <th>
                                         Total
                                    </th>
                                    <th>
                                        Unique
                                    </th>
                                  </thead>
                                <tbody>
                                  <tr>
                                   
                                    <td><i class="fab fa-facebook-square"></i> Facebook</td>
                                    <td>13</td>
                                    <td>11</td>
                                  </tr>
                                  <tr>
                                   
                                    <td><i class="fab fa-instagram-square"></i> Instagram</td>
                                    <td>17</td>
                                    <td>13</td>
                                  </tr>
                                  <tr>
                                   
                                    <td><i class="fab fa-firefox-browser"></i> Website</td>
                                    <td>20</td>
                                    <td>13</td>
                                  </tr>
                                  <tr>
                                   
                                    <td><i class="fab fa-twitter-square"></i> Twitter</td>
                                    <td>200</td>
                                    <td>10</td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
        
        
        
                    </div>
            </div>

        </div>
        </div>
        
    </section>

    <div class="modal fade" id="sell_model">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modal-fourth">
          <div class="modal-header">
            <h4 class="modal-title">Customerwise Sell Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="col-md-12">
            <div class="container">
              <div class="col-md-12">

                <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                  <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Online Portal Sales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Customer Visit</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Amount of Sales </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Customerwise Unit Ship </a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-four-tabContent">

                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                      <table id="example" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th>SKU #</th>
                            <th>Seller Name</th>
                            <th>Order</th>
                            <th>Store</th>
                            <th>Recipient</th>
                            <th>Qty</th>
                            <th>Price/Unit</th>
                            <th>Request Service</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td>0098</td>
                            <td>Jack</td>
                            <td>101</td>
                            <td>Amazon</td>
                            <td data-toggle="modal" data-id="1" data-target="#customer_data">Ship2way support</td>
                            <td> 4</td>
                            <td>$3.78</td>
                            <td>Free Shipping</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td>4566</td>
                            <td>Mack</td>
                            <td>102</td>
                            <td>Amazon</td>
                            <td data-toggle="modal" data-id="1" data-target="#customer_data">Ship2way support</td>
                            <td> 4</td>
                            <td>$3.78</td>
                            <td>Free Shipping</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th>SKU #</th>
                            <th>Seller Name</th>
                            <th>Order</th>
                            <th>Store</th>
                            <th>Recipient</th>
                            <th>Qty</th>
                            <th>Price/Unit</th>
                            <th>Request Service</th>
                          </tr>
                        </tfoot>
                      </table>  
                    </div>

                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                      <table id="example" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th>SKU #</th>
                            <th>Seller Name</th>
                            <th>Order</th>
                            <th>Store</th>
                            <th>Recipient</th>
                            <th>Qty</th>
                            <th>Price/Unit</th>
                            <th>Request Service</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td>0098</td>
                            <td>Jack</td>
                            <td>101</td>
                            <td>Amazon</td>
                            <td data-toggle="modal" data-id="1" data-target="#customer_data">Ship2way support</td>
                            <td> 4</td>
                            <td>$3.78</td>
                            <td>Free Shipping</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td>4566</td>
                            <td>Mack</td>
                            <td>102</td>
                            <td>Amazon</td>
                            <td data-toggle="modal" data-id="1" data-target="#customer_data">Ship2way support</td>
                            <td> 4</td>
                            <td>$3.78</td>
                            <td>Free Shipping</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th>SKU #</th>
                            <th>Seller Name</th>
                            <th>Order</th>
                            <th>Store</th>
                            <th>Recipient</th>
                            <th>Qty</th>
                            <th>Price/Unit</th>
                            <th>Request Service</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                      <table id="example" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th>SKU #</th>
                            <th>Seller Name</th>
                            <th>Order</th>
                            <th>Store</th>
                            <th>Recipient</th>
                            <th>Qty</th>
                            <th>Price/Unit</th>
                            <th>Request Service</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td>0098</td>
                            <td>Jack</td>
                            <td>101</td>
                            <td>Amazon</td>
                            <td data-toggle="modal" data-id="1" data-target="#customer_data">Ship2way support</td>
                            <td> 4</td>
                            <td>$3.78</td>
                            <td>Free Shipping</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td>4566</td>
                            <td>Mack</td>
                            <td>102</td>
                            <td>Amazon</td>
                            <td data-toggle="modal" data-id="1" data-target="#customer_data">Ship2way support</td>
                            <td> 4</td>
                            <td>$3.78</td>
                            <td>Free Shipping</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th>SKU #</th>
                            <th>Seller Name</th>
                            <th>Order</th>
                            <th>Store</th>
                            <th>Recipient</th>
                            <th>Qty</th>
                            <th>Price/Unit</th>
                            <th>Request Service</th>
                          </tr>
                        </tfoot>
                      </table> 
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                      <table id="example" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th>SKU #</th>
                            <th>Seller Name</th>
                            <th>Order</th>
                            <th>Store</th>
                            <th>Recipient</th>
                            <th>Qty</th>
                            <th>Price/Unit</th>
                            <th>Request Service</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td>0098</td>
                            <td>Jack</td>
                            <td>101</td>
                            <td>Amazon</td>
                            <td data-toggle="modal" data-id="1" data-target="#customer_data">Ship2way support</td>
                            <td> 4</td>
                            <td>$3.78</td>
                            <td>Free Shipping</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td>4566</td>
                            <td>Mack</td>
                            <td>102</td>
                            <td>Amazon</td>
                            <td data-toggle="modal" data-id="1" data-target="#customer_data">Ship2way support</td>
                            <td> 4</td>
                            <td>$3.78</td>
                            <td>Free Shipping</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th>SKU #</th>
                            <th>Seller Name</th>
                            <th>Order</th>
                            <th>Store</th>
                            <th>Recipient</th>
                            <th>Qty</th>
                            <th>Price/Unit</th>
                            <th>Request Service</th>
                          </tr>
                        </tfoot>
                      </table> 
                    </div>
                 
                 
                  </div>
                </div>
                <!-- /.card -->
                 </div>
            </div>
               

            </div>
          <br><br>
          </div>
         
        </div>
      </div>
    </div>
  </div>
@endsection