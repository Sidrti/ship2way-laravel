@extends('layouts.app')

@push('page_scripts')
<script src="{{asset('js/customerOverview.js')}}" type="text/javascript" defer></script>
@endpush
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Operations</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h3 class="card-title">
                            <input type="button" class="btn btn-block btn-outline-secondary" id="daterange-btn">
                            </h3> 
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                     
                              <div class="col-4">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>85</h3>
                    
                                    <p>New Orders</p>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                  </div>
                              
                                </div>
                              </div>
                              <div class="col-4">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                  <h3>38</h3>
                    
                                    <p>Ready to Ship</p>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-4">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>42</h3>
                    
                                    <p>Orders Shipped</p>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                  </div>

                                </div>
                              </div>
                            </div>
                            {{-- <div class="col-sm-12">
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#order_unit">Order Unit</button>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#pending_order">Pending Order</button>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#back_order">Backorder</button>
                            </div> --}}
                            <div id="shipments_charts"></div>
                        </div>
                        <!-- /.card-body-->
                      </div>
                </div>
       
          <div class="row">
              <div class="col">
                  
                <div id="order_buyer_state"></div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Top 5 Most Valuable Customers</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-sm">
                          <thead>
                              <th>Name</th>
                              <th>Qty</th>
                              <th>Value</th>
                          </thead>
                        <tbody>
                          <tr>
                            <td>Siddhant</td>
                            <td>2</td>
                            <td class="text-success">$ 100</td>
                          </tr>
                          <tr>
                            <td>Praful</td>
                            <td>3</td>
                            <td class="text-success">$ 121</td>
                          </tr>
                          <tr>
                            <td>Sumith</td>
                            <td>3</td>
                            <td class="text-success">$ 121</td>
                          </tr>
                          <tr>
                            <td>Arti</td>
                            <td>3</td>
                            <td class="text-success">$ 121</td>
                          </tr>
                          <tr>
                            <td>Harshit</td>
                            <td>3</td>
                            <td class="text-success">$ 121</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    <!-- /.card-body -->
                </div>

                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Online Store</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-sm">
                          <thead>
                              <th>Name</th>
                              <th>Place</th>
                          </thead>
                        <tbody>
                          <tr>
                            <td>Ebay</td>
                            <td>California</td>
                          
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
          </div>
        </div>
        
        <div class="modal fade" id="order_unit">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal-fourth">
              <div class="modal-header">
                <h4 class="modal-title">Order Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="col-md-12">
                <div class="container">
                  <div class="col-md-12">
    
                    <div class="card card-primary card-outline card-outline-tabs">
                   
                    <div class="card-body">
                      <table id="tbUser" class="table table-bordered table-hover tab1">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th class="alias_column">Username</th>
                            <th class="sku_column">Email</th>
                            <th class="preset_column">Mobile</th>
                            <th class="UPC_column">Address</th>
                            <th class="varient_column">City</th>
                            <th class="category_column">Country</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td class="alias_column">Jack</td>
                            <td class="sku_column">jack@gmail.com</td>
                            <td>9089786756</td>
                            <td>Lajpat Nagar</td>
                            <td>Mumbai</td>
                            <td>India</td>
                           
                           
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td class="alias_column">Mack</td>
                            <td class="sku_column">Mack@gmail.com</td>
                            <td>9089786756</td>
                            <td>Sankar Nagar</td>
                            <td>Delhi</td>
                            <td>India</td>
                            
                          </tr>
                        </tbody>
                        
                      </table> 
                    </div>
                   
                     
                   </div>
                   
    
                </div>
              <br><br>
              </div>
             
            </div>
          </div>
          </div>
        </div>

        <div class="modal fade" id="pending_order">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal-fourth">
              <div class="modal-header">
                <h4 class="modal-title">Pending Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="col-md-12">
                <div class="container">
                  <div class="col-md-12">
    
                    <div class="card card-primary card-outline card-outline-tabs">
                   
                    <div class="card-body">
                      <table id="tbUser" class="table table-bordered table-hover tab1">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th class="alias_column">Username</th>
                            <th class="sku_column">Email</th>
                            <th class="preset_column">Mobile</th>
                            <th class="UPC_column">Address</th>
                            <th class="varient_column">City</th>
                            <th class="category_column">Country</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td class="alias_column">Jack</td>
                            <td class="sku_column">jack@gmail.com</td>
                            <td>9089786756</td>
                            <td>Lajpat Nagar</td>
                            <td>Mumbai</td>
                            <td>India</td>
                           
                           
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td class="alias_column">Mack</td>
                            <td class="sku_column">Mack@gmail.com</td>
                            <td>9089786756</td>
                            <td>Sankar Nagar</td>
                            <td>Delhi</td>
                            <td>India</td>
                            
                          </tr>
                        </tbody>
                        
                      </table> 
                    </div>
                   
                     
                   </div>
                   
    
                </div>
              <br><br>
              </div>
             
            </div>
          </div>
          </div>
        </div>

        <div class="modal fade" id="back_order">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal-fourth">
              <div class="modal-header">
                <h4 class="modal-title">Back Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="col-md-12">
                <div class="container">
                  <div class="col-md-12">
    
                    <div class="card card-primary card-outline card-outline-tabs">
                   
                    <div class="card-body">
                      <table id="tbUser" class="table table-bordered table-hover tab1">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </th>
                            <th class="alias_column">Username</th>
                            <th class="sku_column">Email</th>
                            <th class="preset_column">Mobile</th>
                            <th class="UPC_column">Address</th>
                            <th class="varient_column">City</th>
                            <th class="category_column">Country</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td class="alias_column">Jack</td>
                            <td class="sku_column">jack@gmail.com</td>
                            <td>9089786756</td>
                            <td>Lajpat Nagar</td>
                            <td>Mumbai</td>
                            <td>India</td>
                           
                           
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                              </div>
                            </td>
                            <td class="alias_column">Mack</td>
                            <td class="sku_column">Mack@gmail.com</td>
                            <td>9089786756</td>
                            <td>Sankar Nagar</td>
                            <td>Delhi</td>
                            <td>India</td>
                            
                          </tr>
                        </tbody>
                        
                      </table> 
                    </div>
                   
                     
                   </div>
                   
    
                </div>
              <br><br>
              </div>
             
            </div>
          </div>
          </div>
        </div>

       
    </section>
  </div>
  @endsection

