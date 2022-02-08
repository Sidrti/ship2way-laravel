@extends('layouts.app')
@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
        <div class="col-sm-6">
          <h1>End of Day</h1>
        </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row mb-2">
                <h3 class="card-title">End of Day</h3>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
        <div class="table-responsive">
            <table class="table align-items-center table-flush order-column" id="cancelledTable">
              <thead class="thead-light">
                <tr>
                  <th>Carrier</th>
                  <th>Shipped</th>
                  <th>Recieved Return</th>
                  <th>Amount($) Sold</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>USPS</td>
                  <td>5</td>
                  <td>Y</td>
                  <td>5 $</td>
                  <td><a href="">Close Shipments</a></td>
                </tr> 
              </tbody>
            </table>
            </div>
            </div>
          </div>
          <!-- /.card-body -->

      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row mb-2">
              <h3 class="card-title">End of Day Forms</h3>
            </div>
            <div class="btn-group float-right" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary">Day</button>
              <button type="button" class="btn btn-secondary">Month</button>
              <button type="button" class="btn btn-secondary">Year</button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12" style="overflow: auto;">
          <table id="end_of_day" class="table align-items-center table-flush order-column">
            <thead class="thead-light">
              <tr>
                <th>SKU #</th>
                <th>Created</th>
                <th>RMA #</th>
                <th>Customer Name</th>
                <th>Online shopping</th>
                <th>Order Number</th>
                <th>Shipped Unit</th>
                <th>Dollar amount</th>
                <th>Recieving Date</th>
                <th>Unit Returned</th>
                <th>Product Name</th>
                <th>Return Seller</th>
                <th>Refund status</th>
                <th>Customer Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="badge badge-primary"># 126</td>
                <td>07/08/2014</td>
                <td><span class="badge badge-dark">47389</td>
                <td>Jack</td>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder"
                        src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Amazon</span>
                    </div>
                  </div>
                </th>
                <td>4567</td>
                <td>456</td>
                <td>89</td>
                <td>2-6-2021</td>
                <td>29</td>
                <td>Tshirts</td>
                <td>Amazon</td>
                <td>Refund Done</td>
                <td>Delhi</td>
               
                <td><a href="">Print</a></td>
              </tr> 
              <tr>
                <td><span class="badge badge-primary"># 12346</td>
                <td>07/08/2014</td>
                <td><span class="badge badge-dark">7843</td>
                <td>Mack</td>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder"
                        src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Amazon</span>
                    </div>
                  </div>
                </th>
                <td>4567</td>
                <td>5677</td>
                <td>67</td>
                <td>12-6-2021</td>
                <td>29</td>
                <td>Tshirts</td>
                <td>Amazon</td>
                <td>Refund Done</td>
                <td>Delhi</td>
               
           
                <td><a href="">Print</a></td>
              </tr> 
              
            </tbody>
          </table>
          </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
@endsection
