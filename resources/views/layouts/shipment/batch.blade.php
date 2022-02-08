@extends('layouts.app')
@section('content')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
        <div class="col-sm-6">
          <h1>Batch Shipment</h1>
        </div>
          {{-- <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> --> --}}
        </div>
        <div class="row">
          <!-------------dropdown---------------------->
          <div class="btn-group" data-toggle="button" role="group">
             
            <button type="button" class="btn border" id="print">Print</button>
            <button type="button" class="btn border">Cancel Batch</button>
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Process Label</button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="#">USPC</a>
              <a class="dropdown-item" href="#">Amazon</a>
            </div>
            <button type="button" class="btn" >Bulk Update</button>
          
        </div>
      </div>
      </div>
    </div>

  <section class="content">
      <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <div class="row mb-2">
                <h3 class="card-title">Filters :</h3>
              </div>
            <div class="row ">
              <div class="col-12">
                  <div class="btn-group" data-toggle="button" role="group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Store</button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">USPC</a>
                      <a class="dropdown-item" href="#">Amazon</a>
                    </div>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Marketplace</button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Flipkart</a>
                      <a class="dropdown-item" href="#">Amazon</a>
                    </div>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Carrier</button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">USPC</a>
                      <a class="dropdown-item" href="#">TedEx</a>
                    </div>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Ship From</button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Warehouse</a>
                      <a class="dropdown-item" href="#">Selling Station</a>
                    </div>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Country</button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">India</a>
                      <a class="dropdown-item" href="#">America</a>
                    </div>
                    <button type="button" class="btn">Ship Date</button>
                    <button type="button" class="btn">Other</button>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Shipping Account</button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Hermes</a>
                      <a class="dropdown-item" href="#">Parcel Force</a>
                    </div>
                    <div class="badge">                
                      <i class="fa fa-times text-danger ml-2 mt-1" aria-hidden="true"></i>
                      <span class="text-danger ml-1">Clear</span></div>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-items-center table-flush order-column" id="cancelledTable">

                <thead class="thead-light">
                  <tr>
                    <th>
                      <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox">
                      </div>
                    </th>
                    <th>RMA #</th>
                    <th>Order #</th>
                    <th>Tracking #</th>
                    <th>Customer Name</th>
                    <th>Packing Slip</th>
                    <th>Label Created</th>
                    <th>Label Printed #</th>
                    <th>Store Notified</th>
                    <th>Shipping Date</th>
                    <th>Shipment Notification</th>
                    <th>Delivery Notification</th>
                    <th>Custom Forms</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                      </div>
                    </td>
                    <td><span class="badge badge-primary"># 340</span></td>
                    <td><span class="badge badge-info"># 789423</span></td>
                    <td><span class="badge badge-dark"># 789839</span></td>
                    <td>                        <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder"
                          src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                      </a>
                      <div class="media-body">
                        <span class="mb-0 text-sm">Siddhant</span>
                      </div>
                    </div></td>
                    <td><i class="fas fa-print"></i> Printed</td>
                    <td><i class="fas fa-dollar-sign"></i> Created</td>
                    <td><i class="fas fa-print"></i> Printed</td>
                    <td><i class="fab fa-telegram-plane"></i> <span> Notified</span></td>
                    <td>23-03-2021</td>
                    <td><i class="fab fa-telegram-plane text-secondary"></i></td>
                    <td><i class="fab fa-telegram-plane"></i> Notified</td>
                    <td><a href="">Created PDF</a></td>
                  </tr>
                  <tr>
                      <td>
                        <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                      <td><span class="badge badge-primary"># 340</span></td>
                      <td><span class="badge badge-info"># 789423</span></td>
                      <td><span class="badge badge-dark"># 789839</span></td>
                                         <td>                        <div class="media align-items-center">
                                          <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder"
                                              src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                                          </a>
                                          <div class="media-body">
                                            <span class="mb-0 text-sm">Harshit</span>
                                          </div>
                                        </div></td>
                      <td><i class="fas fa-print"></i> Printed</td>
                      <td><i class="fas fa-dollar-sign"></i> Created</td>
                      <td><i class="fas fa-print"></i> Printed</td>
                      <td><i class="fab fa-telegram-plane text-secondary"></i> <span class="text-danger"> Failed</span></td>
                      <td>23-03-2021</td>
                      <td><i class="fab fa-telegram-plane text-secondary"></i></td>
                      <td><i class="fab fa-telegram-plane"></i> Notified</td>
                      <td><a href="">Created PDF</a></td>
                    </tr>              
                    <tr>
                      <td>
                        <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                      <td><span class="badge badge-primary"># 340</span></td>
                      <td><span class="badge badge-info"># 789423</span></td>
                      <td><span class="badge badge-dark"># 789839</span></td>
                             <td>                        <div class="media align-items-center">
                              <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder"
                                  src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                              </a>
                              <div class="media-body">
                                <span class="mb-0 text-sm">Amazon</span>
                              </div>
                            </div></td>
                      <td><i class="fas fa-print"></i> Printed</td>
                      <td><i class="fas fa-dollar-sign text-secondary"></i></td>
                      <td><i class="fas fa-print"></i> Printed</td>
                      <td><i class="fab fa-telegram-plane"></i><span> Notified</span></td>
                      <td>23-03-2021</td>
                      <td><i class="fab fa-telegram-plane text-secondary"></i></td>
                      <td><i class="fab fa-telegram-plane text-secondary"></i></td>
                      <td><a href="">Created PDF</a></td>
                    </tr>  
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
      </div>
  </section>
  @endsection
