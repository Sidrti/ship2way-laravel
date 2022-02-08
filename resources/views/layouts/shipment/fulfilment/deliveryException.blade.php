@extends('layouts.app')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
        <div class="col-sm-6">
          <h1>Delivery Exception</h1>
        </div>
        </div>
        <div class="row">

          <button class="btn border  mr-1" disabled>Cancel Fulfilments</button>
          <button class="btn border  mr-1">Update Status</button>
          <button class="btn border  mr-1" disabled>Create Return</button>
          <button class="btn border  mr-1" id="export">Export</button>

      </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content ---------------------------------------------------------------------->
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row mb-2">
                <h3 class="card-title">Filters :</h3>
              </div>
              <div class="row">
                <div class="btn-group" data-toggle="button" role="group">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Country</button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">India</a>
                    <a class="dropdown-item" href="#">USA</a>
                  </div>
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Ship Date</button>

                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Provider</button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Amazon</a>
                    <a class="dropdown-item" href="#">Flipkart</a>
                  </div>
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Store</button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">USPC</a>
                    <a class="dropdown-item" href="#">TedEx</a>
                  </div>
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Product</button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Tshirt</a>
                    <a class="dropdown-item" href="#">Shirts</a>
                  </div>
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Inventory Status</button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Out of Stock</a>
                    <a class="dropdown-item" href="#">InStock</a>
                  </div>
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Warehouse</button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Out of Stock</a>
                    <a class="dropdown-item" href="#">InStock</a>
                  </div>
                  <div class="badge">                
                    <i class="fa fa-times text-danger ml-2 mt-1" aria-hidden="true"></i>
                    <span class="text-danger ml-1">Clear</span></div>
                </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <div class="table-responsive">
          <div class="col-md-12" style="overflow: auto;">
            <table id="recent_shipments" class="table align-items-center table-flush order-column table-hover">
              <thead class="thead-light">
                <tr>
                  <th>
                    <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </th>
                  <th>SKU #</th>
                  <th>Seller Name</th>
                  <th>Product Name</th>
                  
                  <th>Ship Status</th>
                  <th>Deliver Date</th>
                  <th>Customer Name</th>
                  <th>Order Number</th>
                  <th>Bin #</th>
                  <th>Quantity</th>
                  <th>Reason</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </td>
                  <td><span class="badge badge-primary"># 140</span></td>
                  <td>Tshirt</td>
                  <td>Completed</td>
                  <td><span class="badge badge-info">Pending</span></td>
                  <td>16 January</td>
                  <td>                        
                    <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder"
                        src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/vue.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Jack</span>
                    </div>
                  </div></td>
                  <td>ER455</td>
                  <td>5</td>
                  <td>5</td>
                  <td>Not Yet</td>
                </tr>
                <tr>
                    <td>
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                      </div>
                    </td>
                    <td><span class="badge badge-primary"># 140</span></td>
            
                    <td>Tshirt</td>
                    <td>Completed</td>
                    <td><span class="badge badge-success">&nbsp Done &nbsp</span></td>
                    
                    <td>16 January</td>
                    <td>                        
                      <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder"
                          src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/vue.jpg">
                      </a>
                      <div class="media-body">
                        <span class="mb-0 text-sm">Siddhant</span>
                      </div>
                    </div></td>
                    <td>R5678</td>
                    <td>5</td>
                    <td>5</td>
                    <td>Not Yet</td>
                  
              </tbody>
            </table>
          </div>
          <div class="card-footer py-4">
            <nav aria-label="...">
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
</div>
</div>
@endsection
