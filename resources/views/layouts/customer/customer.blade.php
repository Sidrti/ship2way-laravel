@extends('layouts.app')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
        <div class="col-sm-6">
          <h1>All Customers</h1>
        </div>
        </div>
        <div class="row">

          <button class="btn border  mr-1" disabled>Create Label</button>
          <button class="btn border  mr-1">New Order</button>
          <button class="btn border  mr-1" id="import">Import</button>

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
           
                <div class="btn-group btn-group-display" data-toggle="button" role="group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Marketplace Username</button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Amazon</a>
                      <a class="dropdown-item" href="#">Alibaba</a>
                    </div>
                </div>
                <div class="btn-group btn-group-display" data-toggle="button" role="group">    
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Country</button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="#">India</a>
                  <a class="dropdown-item" href="#">USA</a>
                </div>
            </div>

                <div class="badge">                
                  <i class="fa fa-times text-danger ml-2 mt-1" aria-hidden="true"></i>
                  <span class="text-danger ml-1">Clear</span></div>
              
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>City</th>
                  <th>State Country</th>
                  <th>Company</th>
                  <th>Marketplace</th>
                  <th>Marketplace Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </td>
                  <td>Harshit Mishra</td>
                  <td>mishra@boxinallsoftech.com</td>
                  <td>+918279607423</td>
                  <td>Kanpur</td>
                  <td>India</td>
                  <td>Boxinall</td>
                  <td>Ship2way</td>
                  <td>ship2way@boxinallsoftech.com</td>
                </tr>
                <tr>
                    <td>
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                      </div>
                    </td>
                    <td>Pallav Bansal</td>
                    <td>pallav@boxinallsoftech.com</td>
                    <td>+918279607423</td>
                    <td>Moradabad</td>
                    <td>India</td>
                    <td>BIA</td>
                    <td>Ship2way</td>
                    <td>ship2way@boxinallsoftech.com</td>
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
