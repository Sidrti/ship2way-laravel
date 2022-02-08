@extends('layouts.app')
@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
        <div class="col-sm-6">
          <h1>Returns</h1>
        </div>

        </div>
        <div class="row">            
          <div class="btn-group mr-1">
            <button type="button" class="btn border" id="print">Print Label</button>
            <button class="btn border mr-1">Void Label(s)</button>
            <button class="btn border mr-1">Update Tracking</button>
            <button class="btn border mr-1">Marked Recieved</button>
            <button type="button" class="btn border">Resend Return Label</button>
          </div>
      </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content ---------------------------------------------------------------------->
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link " href="{{url('shipment/return')}}">Outstanding</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{url('shipment/return-recieved')}}">Recieved</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('shipment/return-recieved')}}">Voided</a>
                    </li>
                  </ul>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <div class="col-md-12" style="overflow: auto;">
              <table id="recent_shipments" class="table align-items-center table-flush order-column">
                <thead>
                  <tr>
                    <th>
                      <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox">
                      </div>
                    </th>
                    <th>RMA #</th>
                    <th>Order #</th>
                    <th>Product Name</th>
                    <th>Created Date</th>
                    <th>Customer Name</th>
                    <th>Returning Party</th>
                    <th>Ship/Rec Status</th>
                    
                    <th>Ship To</th>
                    <th>Carrier</th>
                    <th>Shipping Fee</th>
                    <th>Label Created</th>
                    <th>Email or Cell Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                      </div>
                    </td>
                    <td><span class="badge-primary badge">121323</span></td>
                    <td><span class="badge badge-dark">112326</td>
                    <td>Tshirts</td>
                    <td>10/15/2021</td>
                    <td>Tom Williams</td>
                    <td>Jacob</td>
                    <td>Y</td>
                   
                    <td>4789237492749</td>
                    <td>FedEx Group</td>
                    <td>$0</td>
                    <td><i class="fas fa-print"></i> Printed</td>
                    <td>siddhant.singh326@gmail.com</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                      </div>
                    </td>
                    <td><span class="badge-primary badge">1323</span></td>
                    <td><span class="badge badge-dark">31126</td>
                    <td>Couch Bag</td>
                    <td>10/15/2021</td>
                    <td>Tom Williams</td>
                    <td>Jacob</td>
                    <td>Y</td>
                   
                    <td>4789237492749</td>
                    <td>FedEx Group</td>
                    <td>$0</td>
                    <td><i class="fas fa-print"></i> Printed</td>
                    <td>siddhant.singh326@gmail.com</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                      </div>
                    </td>
                    <td><span class="badge-primary badge">12123</span></td>
                    <td><span class="badge badge-dark">1126</td>
                    <td>Laptop</td>
                    <td>10/15/2022</td>
                    <td>Roger Federer</td>
                    <td>Jacob</td>
                    <td>Y</td>
                  
                    <td>4789237492749</td>
                    <td>FedEx Group</td>
                    <td>$0</td>
                    <td><i class="fas fa-print text-muted"></i></td>
                    <td>pallavbansal@gmail.com</td>
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
          <!-- /.card-body -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
</div>
</div>

@endsection