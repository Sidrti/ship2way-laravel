@extends('layouts.app')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Awaiting Shipment</h1>
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
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Print</button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="#">USPC</a>
                <a class="dropdown-item" href="#">Amazon</a>
              </div>
            </div>
            <div class="btn-group" data-toggle="button" role="group">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Assign To</button>
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
        <div class="btn-group mr-1" data-toggle="button" role="group">
          <button type="button" class="btn" data-toggle="modal" data-target="#New_Orders">New_Orders</button>   
        </div>
        <div class="btn-group mr-1" data-toggle="button" role="group">
          <button type="button" class="btn" data-toggle="modal" data-target="#Product_details">MarkAsRead</button>   
        </div>
        <div class="btn-group" data-toggle="button" role="group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Import</button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#import_product">Import Products</a>
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#import_product_alises">Import Product Alises</a>
            </div>       
        </div>
        <div class="btn-group mr-1" data-toggle="button" role="group">
          <button type="button" class="btn" data-toggle="modal" data-target="#export">Export</button>   
        </div>

        <div class="btn-group mr-1" data-toggle="button" role="group">    
          <button type="button" class="btn" data-toggle="modal" data-target="#deactivate">Deactivate</button>                  
        </div>

        <div class="btn-group mr-1" data-toggle="button" role="group">
          <button type="button" class="btn">Delete</button> 
        </div>
        <div class="btn-group mr-1" data-toggle="button" role="group">              
          <button type="button" class="btn" data-toggle="modal" data-target="#combine">Combine</button>                  
        </div>
        <div class="btn-group mr-1" data-toggle="button" role="group">
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
                            <label class="form-check-label" for="exampleCheck1">Name of customer</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="store">
                            <label class="form-check-label" for="exampleCheck1">Name of manufacture</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="recipient">
                            <label class="form-check-label" for="exampleCheck1">Order number</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Invoice number, picking ticket number, Product</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Invoice number</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Picking ticket number</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Product</label>
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
                    <div class="row" style="overflow: scroll;height: 200px;">
                    <div class="col-md-6">
                        <form id="selection">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Clothing</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Furniture</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Foods</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Home Décor</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1"> Toys</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Jewelry</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Consumer Electronic</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Appliances</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Automobile</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Watch & Accessories</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Computer and Phone</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Supplement</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Art & Gallery</label>
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
                    <div class="row" style="overflow: scroll;height: 200px;">
                    <div class="col-md-6">
                        <form id="selection">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="order" value="order">
                            <label class="form-check-label" for="exampleCheck1">Mens wear</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="store">
                            <label class="form-check-label" for="exampleCheck1">Women Wear</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="recipient">
                            <label class="form-check-label" for="exampleCheck1">kid wear</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">TV</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Refrigerator</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Automobile</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Washing Machine</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Notebook</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Desktop</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Table</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Chair</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Printer</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="qty">
                            <label class="form-check-label" for="exampleCheck1">Air Conditioning</label>
                          </div>
                        </form>
                   
                     </div>
                    </div>
                    </div>
                  </div>
                </div>   
                
                <div class="btn btn-group mr-1">
                  <span class="">Ship Date - </span>
                  <input  class="input-date" id="daterange-btn" value="" readonly> 
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

                <div class="btn-group mr-1">
                    <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      Manufacturer
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Name of manufacturer</a>
                      <a class="dropdown-item" href="#">Name or importer</a>
                      <a class="dropdown-item" href="#">Name of wholesaler</a>
                      <a class="dropdown-item" href="#">Distributor</a>
                    </div>
                  
                </div>

                <div class="btn-group mr-1">
                    <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      Country Origin
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Thailand</a>
                      <a class="dropdown-item" href="#">China</a>
                      <a class="dropdown-item" href="#">India</a>
                      <a class="dropdown-item" href="#">Vietnam</a>
                      <a class="dropdown-item" href="#">USA</a>
                      <a class="dropdown-item" href="#">South Korea</a>
                      <a class="dropdown-item" href="#">Taiwan</a>
                      <a class="dropdown-item" href="#">Russia</a>
                      <a class="dropdown-item" href="#">Cambodia</a>
                      <a class="dropdown-item" href="#">Laos</a>
                      <a class="dropdown-item" href="#">Mexico</a>
                    </div>
                  
                </div>

                <div class="btn-group mr-1">
                    <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      Markey Place
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">One</a>
                      <a class="dropdown-item" href="#">Two</a>
                      <a class="dropdown-item" href="#">Three</a>
                    </div>
                  
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
                  <th>Seller Name</th>
                  <th>Order</th>
                  <th>Store</th>
                  <th>Recipient</th>
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
                  <td>Mack</td>
                  <td>1101</td>
                  <td>Amazon</td>
                  <td>Ship2way Support</td>
                  <td>Shoes</td>
                  <td>A fine quality leather shoes durable and reliable in any conditon</td>
                  <td>Footwear</td>
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
                  <td>Mack</td>
                  <td>1101</td>
                  <td>Amazon</td>
                  <td>Ship2way Support</td>
                  <td>Bag</td>
                  <td>A fine quality leather bag durable and reliable in any conditon</td>
                  <td>Accessories</td>
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

  @include('layouts.modal.ordersModal')

</div>
@endsection
