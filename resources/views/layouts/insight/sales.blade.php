@extends('layouts.app')
@push('page_scripts')
<script src="{{asset('js/sales.js')}}" type="text/javascript" defer></script>
@endpush

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sales</li>
            </ol>
          </div>
        </div>
      </div>
</section>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                      <input type="button" class="btn btn-block btn-outline-secondary" id="daterange-btn">
                    </h3>
                </div>
              </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">

                        <div class="card-body">
                            <div class="row">
                     
                              <div class="col-2">
                                <!-- small card -->
                                <div class="small-box bg-info" >
                                  <div class="inner">
                                    <h3>$ 2971</h3>
                    
                                    <p>Sales</p>
                                  </div>
                              
                                </div>
                              </div>
                              <div class="col-2">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>19%</h3>
                    
                                    <p>Back Order</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-2">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>$ 290</h3>
                    
                                    <p>Avg Order Value</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-2">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>85</h3>
                    
                                    <p>Orders</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-2">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>4</h3>
                    
                                    <p>New Customers</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-2">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>4</h3>
                    
                                    <p>Returning Customers</p>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="line_graph_product_sold" style="height: 400px;"></div>
                        </div>
                        <!-- /.card-body-->
                      </div>
                </div>
       
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Top 5 Products by Revenue</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-sm">
                      <tbody>
                        <tr>
                          <td>Microfiber</td>
                          <td class="text-success">$ 100</td>
                        </tr>
                        <tr>
                          <td>Hotdogs</td>
                          <td class="text-success">$ 121</td>
                        </tr>
                        <tr>
                          <td>Paies</td>
                          <td class="text-success">$ 11</td>
                        </tr>
                        <tr>
                          <td>Denim Jeans</td>
                          <td class="text-success">$ 1201</td>
                        </tr>
                        <tr>
                          <td>Sony Earphones</td>
                          <td class="text-success">$ 1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
              </div>
              </div>
              <div class="col">
                <div class="card">
                  <div id="sales_category"></div>
                  </div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Sales By Store</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                            <td>New ChannelAdvisor Store</td>
                            <td class="text-success">$ 100</td>
                          </tr>
                          <tr>
                            <td>WoCommerce Store</td>
                            <td class="text-success">$ 90</td>
                          </tr>
                          <tr>
                            <td>Albert Store</td>
                            <td class="text-success">$ 60</td>
                          </tr>
                          <tr>
                            <td>Manual Store</td>
                            <td class="text-success">$ 50</td>
                          </tr>
                          <tr>
                            <td>Chirag Store</td>
                            <td class="text-success">$ 10</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>
          </div>
        </div>

        <div class="modal fade" id="cancellation">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal-fourth">
              <div class="modal-header">
                <h4 class="modal-title">Order Cancellation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="col-md-12">
                <div class="container">
                  <div class="col-md-12">
    
                  
                   
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
                    <!-- /.card -->
                     </div>
                </div>
                   
    
                </div>
              <br><br>
              </div>
             
            </div>
          </div>
        </div>

        <div class="modal fade" id="refund">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal-fourth">
              <div class="modal-header">
                <h4 class="modal-title">Refund Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="col-md-12">
                <div class="container">
                  <div class="col-md-12">
    
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
                    <!-- /.card -->
                  
                </div>
                   
    
              </div>
              <br><br>
              </div>
             
            </div>
          </div>
        </div>

        <div class="modal fade" id="online_shop">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal-fourth">
              <div class="modal-header">
                <h4 class="modal-title">Online Shopping Details</h4>
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
                    <!-- /.card -->
                     
                </div>
                   
    
                </div>
              <br><br>
              </div>
             
            </div>
          </div>
        </div>  
    </section>
@endsection