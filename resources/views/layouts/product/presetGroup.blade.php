@extends('layouts.app')
@section('content')

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Preset Groups</h1>
        </div>
        
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> -->
        </div>
        <div class="row">
          <!-------------dropdown---------------------->
          <div class="col-sm-6 col-md-12">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#preset_model" style="float:right">Add Prest Groups</button>
          </div>
          <!-------------------dropdown--------------------->     
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content ---------------------------------------------------------------------->
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
                    
                      <th>Preset Group</th>
                      <th>Stores</th>
                      <th>Manufacturer</th>
                      <th>Brand</th>
                      <th>Size</th>
                      <th>Color</th>
                      <th>Product Type Group</th>
                      <th>Dimension</th>
                      <th>Weight</th>
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
                    
                      <td>Shirt</td>
                      <td>Retail Store</td>
                      <td>Densco</td>
                      <td>Cobb</td>
                      <td>L</td>
                      <td>Black</td>
                      <td>Garment</td>
                      <td>45 x 56</td>
                      <td>3.78gms</td>
                      <td>
                        <span class="badge badge-warning"  data-toggle="modal" data-target="#edit_preset"><i class="fa fa-edit"></i></span>
                        <span class="badge badge-danger"><i class="fa fa-trash"></i></span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                      <td>Hoodie</td>
                      <td>Online Seller</td>
                      <td>Densco</td>
                      <td>Cobb</td>
                      <td>L</td>
                      <td>Black</td>
                      <td>Garment</td>
                      <td>56 x 78</td>
                      <td>3.78gms</td>
                      <td>
                          <span class="badge badge-warning"  data-toggle="modal" data-target="#edit_preset"><i class="fa fa-edit"></i></span>
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

