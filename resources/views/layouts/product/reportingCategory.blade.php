@extends('layouts.app')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Reporting Categories</h1>
        </div>
        
        </div>
        <div class="row">
          
            <div class="col-sm-6 col-md-12">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#category" style="float:right">Add Product Category</button>
            </div>
             
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-body">
              <div class="col-md-12" style="overflow: auto;">
              <table id="tbUser" class="table align-items-center table-flush order-column">
              <thead class="thead-light">
                <tr>
                  <th>
                    <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </th>
                  <th>Product Name</th>
                  <th>Dropship</th>
                  <th>Product Type</th>
                  <th>Stores</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </td>
                  <td>Shoes</td>
                  <td>My store</td>
                  <td>Footwear</td>
                  <td>Amazon</td>
                  <td>
                    <span class="badge badge-warning"  data-toggle="modal" data-target="#edit_rep"><i class="fa fa-edit"></i></span>
                    <span class="badge badge-danger"><i class="fa fa-trash"></i></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </td>
                  <td>Mobile</td>
                  <td>My store</td>
                  <td>Homme Aplliances</td>
                  <td>Ebay</td>
                  <td>
                    <span class="badge badge-warning"  data-toggle="modal" data-target="#edit_rep"><i class="fa fa-edit"></i></span>
                    <span class="badge badge-danger"><i class="fa fa-trash"></i></span>
                  </td>
                </tr>
              </tbody>
              
              </table>
              </div>
            </div>
            </div>
          </div>
          <!-- /.card-header -->
          
          <!-- /.card-body -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  @include('layouts.modal.product')

  @endsection

       

