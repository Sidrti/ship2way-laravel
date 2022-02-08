@extends('layouts.app')

@push('page_scripts')
<script src="{{asset('js/productHighlight.js')}}" type="text/javascript" defer></script>
@endpush

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products Highlights</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Sold</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
                        <div class="card-body">
                            <div class="row">
                     
                              <div class="col-4">
                                <!-- small card -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>85</h3>
                    
                                    <p>Total Orders</p>
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
                                    <h3>9</h3>
                    
                                    <p>Unique Product Ordered</p>
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
                                    <h3>2</h3>
                    
                                    <p>Avg Product Per Order</p>
                                  </div>
                                  <div class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <div id="line_graph_product_sold" style="height: 400px;"></div>
                        </div>
                        <!-- /.card-body-->
                      </div>
            </div>
        </div>
       
    </section>
    
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
        <div id="sales_category"></div>
        </div>
      </div>
      <div class="col">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 5 Products By Quantity</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Prodct Name</th>
                    <th>Sell Qty</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Microfiber</td>
                    <td class="text-primary"> 100</td>
                  </tr>
                  <tr>
                    <td>Denim Jeans</td>
                    <td class="text-primary"> 10</td>
                  </tr>
                  <tr>
                    <td>Paties</td>
                    <td class="text-primary"> 6</td>
                  </tr>
                  <tr>
                    <td>Sony Earphones</td>
                    <td class="text-primary"> 4</td>
                  </tr>
                  <tr>
                    <td>Headset</td>
                    <td class="text-primary"> 1</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
      <div class="col">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 5 Products by Revenue</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Prodct Name</th>
                    <th>Revenue</th>
 
                  </tr>
                </thead>
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
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Top 5 Products By Sell</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>Prodct Name</th>
                  <th>Sell Qty</th>
                  <th>Duration</th>
                  <th>Store Name</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Microfiber</td>
                  <td class="text-primary"> 100</td>
                  <td>3 Months</td>
                  <td>Amazon</td>
                </tr>
                <tr>
                  <td>Denim Jeans</td>
                  <td class="text-primary"> 10</td>
                  <td>1 Months</td>
                  <td>Shopify</td>
                </tr>
                <tr>
                  <td>Paties</td>
                  <td class="text-primary"> 6</td>
                  <td>4 Months</td>
                  <td>Ebay</td>
                </tr>
                <tr>
                  <td>Sony Earphones</td>
                  <td class="text-primary"> 4</td>
                  <td>3 Months</td>
                  <td>Amazon</td>
                </tr>
              
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
      </div>
      </div>
      <div class="col">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 5 Products By Sell Range</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Prodct Name</th>
                    <th>Sell Range</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Microfiber</td>
                    <td class="text-primary">10 To 100</td>
                  </tr>
                  <tr>
                    <td>Denim Jeans</td>
                    <td class="text-primary">50 To 100</td>
                  </tr>
                  <tr>
                    <td>Paties</td>
                    <td class="text-primary">60 To 100</td>
                  </tr>
                  <tr>
                    <td>Sony Earphones</td>
                    <td class="text-primary">70 To 100</td>
                  </tr>
                  <tr>
                    <td>Headset</td>
                    <td class="text-primary">80 To 100</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
      </div>
      <div class="col">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 5 Country by Sell</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Country Name</th>
                    <th>Revenue</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>India</td>
                    <td class="text-success">$ 100</td>
                  </tr>
                  <tr>
                    <td>USA</td>
                    <td class="text-success">$ 121</td>
                  </tr>
                  <tr>
                    <td>Japan</td>
                    <td class="text-success">$ 11</td>
                  </tr>
                  <tr>
                    <td>Australis</td>
                    <td class="text-success">$ 1201</td>
                  </tr>
                  <tr>
                    <td>Canada</td>
                    <td class="text-success">$ 1</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Top 5 Country By Poor Sell</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>Country Name</th>
                  <th>Revenue</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pakistan</td>
                  <td class="text-success">$ 1</td>
                </tr>
                <tr>
                  <td>Zimbambwe</td>
                  <td class="text-success">$ 121</td>
                </tr>
                <tr>
                  <td>Uganda</td>
                  <td class="text-success">$ 11</td>
                </tr>
                <tr>
                  <td>Jamaica</td>
                  <td class="text-success">$ 1201</td>
                </tr>
                <tr>
                  <td>Brazil</td>
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
            <div class="card-header">
              <h3 class="card-title">Top 5 Online Store By Sell</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Store Name</th>
                    <th>Sell Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Amazon</td>
                    <td class="text-primary">100 Billion</td>
                  </tr>
                  <tr>
                    <td>Shopify</td>
                    <td class="text-primary">65 Billion</td>
                  </tr>
                  <tr>
                    <td>Ebay</td>
                    <td class="text-primary">37 Billion</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
      </div>
      <div class="col">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 5 Products by Revenue</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Revenue</th>
                   
                  </tr>
                </thead>
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
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Top 5 State By Sell</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>State Name</th>
                  <th>Sell Qty</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Maharashtra</td>
                  <td class="text-success">$ 1 Billion</td>
                </tr>
                <tr>
                  <td>Uttar Pradesh</td>
                  <td class="text-success">$ 67.8 Million</td>
                </tr>
                <tr>
                  <td>Bihar</td>
                  <td class="text-success">$ 56 Million</td>
                </tr>
                <tr>
                  <td>Haryana</td>
                  <td class="text-success">$ 45 Million</td>
                </tr>
                <tr>
                  <td>Jammu & Kashmir</td>
                  <td class="text-success">$ 34 Million</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
      </div>
      </div>
      <div class="col">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 5 Types Of Product By Sell</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Product Category</th>
                    <th>Sell Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Footwear</td>
                    <td class="text-primary">100 Billion</td>
                  </tr>
                  <tr>
                    <td>Electronics</td>
                    <td class="text-primary">65 Billion</td>
                  </tr>
                  <tr>
                    <td>Clothing</td>
                    <td class="text-primary">37 Billion</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
      </div>
      <div class="col">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 5 Products by Inventory</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Inventory Left</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Microfiber</td>
                    <td class="text-success">100</td>
                  </tr>
                  <tr>
                    <td>Hotdogs</td>
                    <td class="text-success">121</td>
                  </tr>
                  <tr>
                    <td>Paies</td>
                    <td class="text-success">1457</td>
                  </tr>
                  <tr>
                    <td>Denim Jeans</td>
                    <td class="text-success">1201</td>
                  </tr>
                  <tr>
                    <td>Sony Earphones</td>
                    <td class="text-success">1678</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Top 5 Products By Sell</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>State Name</th>
                  <th>Sell Qty</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Maharashtra</td>
                  <td class="text-success">$ 1 Billion</td>
                </tr>
                <tr>
                  <td>Uttar Pradesh</td>
                  <td class="text-success">$ 67.8 Million</td>
                </tr>
                <tr>
                  <td>Bihar</td>
                  <td class="text-success">$ 56 Million</td>
                </tr>
                <tr>
                  <td>Haryana</td>
                  <td class="text-success">$ 45 Million</td>
                </tr>
                <tr>
                  <td>Jammu & Kashmir</td>
                  <td class="text-success">$ 34 Million</td>
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
@endsection