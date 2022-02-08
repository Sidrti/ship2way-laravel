@extends('layouts.app')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
        <div class="col-sm-6">
          <h1>Returns</h1>
        </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> -->
        </div>
        <div class="row">
           
          <div class="btn-group mr-1">
            <button type="button" class="btn border" id="print">Print Label</button>
            <button class="btn border mr-1">Void Shipment(s)</button>
            <button class="btn border mr-1">Update Shipment(s)</button>
            <button class="btn border mr-1">Marked Recieved</button>
            <button type="button" class="btn border">Resend Return Label</button>
          </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="container">
      <div class="alert alert-danger" role="alert" id="alert" style="display: none;">
        Amount Will Refund To Credit Card
      </div>
    </div>
    <!-- Main content ---------------------------------------------------------------------->
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="{{url('shipment/return')}}">Outstanding</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('shipment/return-recieved')}}">Recieved</a>
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
                  <th>Received Date</th>
                  <th>Customer Name</th>
                  <th>Return Seller</th>
                  <th>Return Date</th>
                  <th>Refund Issued</th>
                  <th>Werehouse/Bin</th>
                  <th>Online Store</th>
                  <th>Tracking #</th>
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
                  <td><span class="badge-primary badge">12123</span></td>
                  <td><span class="badge badge-dark">1126</td>
      
                  <td>Tshirts</td>
                  <td>10/15/2021</td>
                  <td>Tom Williams</td>
                  <td>Jacob</td>
                  <td>10/11/2021</td>
                  <td><div class="badge badge-success" onclick="myFunction()">Yes</div></td>
                  <td><div class="badge badge-info" data-toggle="modal" data-target="#new_user">Click to See Werehouse Detail</div></td>
                  <td>Shopify</td>             
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
                  <td><span class="badge badge-dark">12436</td>
                  <td>Couch Bag</td>
                  <td>10/15/2021</td>
                  <td>Tom Williams</td>
                  <td>Jacob</td>
                  <td>4/11/2021</td>
                  <td><div  class="badge-success badge" onclick="myFunction()">Yes</div></td>
                  <td><div  class="badge badge-info" data-toggle="modal" data-target="#new_user">Click to See Werehouse Detail</div></td>
                  <td>Shopify</td>
                  
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
                  <td><span class="badge badge-dark">4353432</td>
               
                  <td>Laptop</td>
                  <td>10/15/2022</td>
                  <td>Roger Federer</td>
                  <td>Jacob</td>
                  <td>5/11/2021</td>
                  <td><div  class="badge badge-danger" onclick="myFunction()">No</div></td>
                  <td><div  class="badge badge-info" data-toggle="modal" data-target="#new_user">Click to See Werehouse Detail</div></td>
                  <td>Shopify</td>
                
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
      </div>
  </section>

  <div class="modal fade" id="new_user">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Return Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           
            <div class="col-md-12">

               
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-four-tabContent">

                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                   
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">Returned Seller</label>
                              <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputState">Return Date</label>
                              <input type="email" class="form-control" id="email">
                            </div>
                          </div>
                          
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">Refund issued</label>
                             <select class="form-control">
                               <option>Yes</option>
                               <option>No</option>
                             </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputCity">warehouse/bin</label>
                              <input type="text" class="form-control" id="city">
                            </div>
                          </div>
                         
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">Online store</label>
                              <input type="text" class="form-control" id="mobile">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputCity">Tracking #</label>
                              <input type="text" class="form-control" id="city">
                            </div>
                          </div>
                         
                        
                          

                          <div class="col-8">
                              <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label">Product is returnable</label>
                              </div>
                          </div>
                          <br>
                         <button type="button" class="btn btn-primary add-user">Save</button>
                         <button type="button" class="btn btn-primary add-user" style="background-color:#FF8300  !important;">Download Data</button>
                        </form>    
                    </div>

                   

                   
                  </div>
                </div>
                <!-- /.card -->
                </div>
            </div>
            <div class="modal-footer justify-content-right">
                  <div class="col-4">
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">Apply changes to open orders</label>
                    </div>
                  </div>
               
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
        
  </div>
</div>
</div>
<script>
function myFunction() {
  $("#alert").show();
}
</script>
@endsection
