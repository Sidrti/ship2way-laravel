@extends('layouts.app')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        {{-- <div class="col-sm-6">
           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#coloumn" style="float:right">Coloumns</button>
        </div> --}}
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> -->
        </div>
        <div class="row">
            <div class="btn-group" data-toggle="button" role="group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Add Preset Group</button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="#">USPC</a>
              <a class="dropdown-item" href="#">Amazon</a>
            </div>
            </div>
            <div class="btn-group" data-toggle="button" role="group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Categorize</button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="#">USPC</a>
              <a class="dropdown-item" href="#">Amazon</a>
            </div>
            </div>
        
        <div class="btn-group" data-toggle="button" role="group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Tag</button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#tags">ManageTags</a>
            </div>
            
        </div>
        <div class="btn-group" data-toggle="button" role="group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Import</button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#import_product">Import Products</a>
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#import_product_alises">Import Product Alises</a>
            </div>
   
           <button type="button" class="btn" data-toggle="modal" data-target="#export">Export</button>                  

         
           <button type="button" class="btn" data-toggle="modal" data-target="#deactivate">Deactivate</button>                  
          
           <button type="button" class="btn">Delete</button>                  
          

           <button type="button" class="btn" data-toggle="modal" data-target="#combine">Combine</button>                  
          
           <button type="button" class="btn" data-toggle="modal" data-target="#add_product">Add Product</button>

       
      </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <h3 class="card-title">Filters :</h3>
              </div>
              <div class="row">

                <div class="btn-group mr-1">
                  <button type="button" class="btn btn-info">Tag</button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Manual Orders</a>
                  </div>
                </div>

                <div class="btn-group mr-1">
                  
                  <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    Preset Groups
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-6">
                        <form id="selection">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Order</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="store">
                            <label class="form-check-label" for="exampleCheck1">Store</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="recipient">
                            <label class="form-check-label" for="exampleCheck1">Recipient</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Qty</label>
                          </div>
                        </form>
                   
                     </div>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="btn-group mr-1">
             
                  <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    Product Type
                  </button>

                  <div class="dropdown-menu" role="menu">
                    <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-6">
                        <form id="selection">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">order</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="store">
                            <label class="form-check-label" for="exampleCheck1">store</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="recipient">
                            <label class="form-check-label" for="exampleCheck1">recipient</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">qty</label>
                          </div>
                        </form>
                   
                     </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="btn-group mr-1">
                  <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    Categories
                  </button>
                  
                  <div class="dropdown-menu" role="menu">
                    <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-6">
                        <form id="selection">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">order</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="store">
                            <label class="form-check-label" for="exampleCheck1">store</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="recipient">
                            <label class="form-check-label" for="exampleCheck1">recipient</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">qty</label>
                          </div>
                        </form>
                   
                     </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="btn-group mr-1">
                  <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    Created At
                  </button>
                
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="#">Today</a>
                  <a class="dropdown-item" href="#">Yesterday</a>
                  <a class="dropdown-item" href="#">In the last 7 days</a>
                  <a class="dropdown-item" href="#">In the last 30 days</a>
                  <a class="dropdown-item" href="#">This month</a>
                  <a class="dropdown-item" href="#">Last month</a>
                  <a class="dropdown-item" href="#">Within the past X days</a>
                  <a class="dropdown-item" href="#">Within the next X days</a>
                  <a class="dropdown-item" href="#">X days ago or more</a>
                  <a class="dropdown-item" href="#">X days ahead or more</a>
                  <a class="dropdown-item" href="#">On or before</a>
                  <a class="dropdown-item" href="#">On or after</a>
                  <a class="dropdown-item" href="#">Custom Range</a>

                  <button type="button" class="btn">Apply</button>   
                </div>    
              </div>

              <div class="btn-group mr-1">
                <button type="button" id="daterange-btn" class="btn btn-info">Modified At</button>
              </div>
              <div class="btn-group mr-1">
             
                 
                  <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    Image Url
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-md-12" style="overflow: auto;">
            <table id="tbl_product" class="table align-items-center table-flush order-column">
              <thead class="thead-light">
                <tr>
                  <th>
                    <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </th>
                  <th class="preset_column">SKU #</th>
                  <th class="preset_column">Product Name</th>
                  <th class="UPC_column">Description</th>
                  <th class="category_column">Product Type</th>
                  <th class="varient_column">Original Price</th>
                  <th class="modified_column">Sales Price</th>
                  <th class="modified_column">Import Price</th>
                  <th class="avaliable_column">Shipping Fee</th>
                  <th class="avaliable_column"> Available Unit</th>
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
                  <td>3536</td>
                  <td>Shoes</td>
                  <td>Free Shipping</td>
                  <td>1000</td>
                  <td>Free Shipping</td>
                  <td>1000</td>
                  <td class="avaliable_column">3000</td>
                  <td class="avaliable_column">2000</td>
                  <td class="avaliable_column">500</td>
                  <td>
                      <button class="badge badge-success"data-toggle="modal" data-target="#edit_product"><i class="fa fa-edit"></i></button>
                      <button class="badge badge-danger"> <i class="fa fa-trash"></i></button>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </td>
                  <td>4664</td>
                  <td>Bag</td>
                  <td>Free Shipping</td>
                  <td>1000</td>
                  <td>Free Shipping</td>
                  <td>1000</td>
                  <td class="avaliable_column">4000</td>
                  <td class="avaliable_column">2000</td>
                  <td class="avaliable_column">500</td>
                  <td style="width:12%">
                    <span class="badge badge-success "data-toggle="modal" data-target="#edit_product"><i class="fa fa-edit"></i></span>
                    <button class="badge badge-danger"> <i class="fa fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
             
            </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content ------------------------------------------------------------------------->

  @include('layouts.modal.product')

</div>
@endsection
