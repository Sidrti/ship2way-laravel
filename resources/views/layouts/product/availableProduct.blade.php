@extends('layouts.app')
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Inventory</h1>
                </div>
                </div>
              <div class="row">
                <h3 class="card-title">Filters :</h3>
              </div>

              <div class="row">
         
                <!-------------dropdown---------------------->
                <div class="btn-group mr-1">
                 <button type="button" class="btn">Deallocate</button>                  
                </div>

                 <div class="btn-group mr-1">
                  <button type="button" class="btn" data-toggle="modal" data-target="#export" id="export">Export </button>
                 </div>

                 <div class="btn-group mr-1">
                  <button type="button" class="btn" data-toggle="modal" data-target="#import">Import Product</button>
                 </div>

                <!-------------------dropdown--------------------->
            </div>
      </div>
            <div class="card-header">
              <div class="card-body">
                <div class="row">
               
                  <!-------------dropdown---------------------->
                  <div class="btn-group mr-1">
                    <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown">Alert</button>

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
                    <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">Created At</button>

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
  
                    <button type="button" class="btn btn-info">Apply</button>   
                    </div> 
                  </div>

                  <div class="btn-group mr-1">
                    <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown">Tracked</button>

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

                  <div class="btn btn-group mr-1">
                    <span class="">Date - </span>
                    <input  class="input-date" id="daterange-btn" value="" readonly> 
                  </div>

                  <div class="btn-group mr-1">
              
                    <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      Brand Name
                    </button>

                    <div class="dropdown-menu" role="menu">
                      <div class="container-fluid">
                      <div class="row" style="overflow: scroll;height: 200px;">
                      <div class="col-md-6">
                          <form id="selection">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Levis</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Cobb</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Blackberry</label>
                            </div>
                          </form>
                    
                      </div>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="btn-group mr-1">
              
                    <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      Product Categories
                    </button>

                    <div class="dropdown-menu" role="menu">
                      <div class="container-fluid">
                      <div class="row" style="overflow: scroll;height: 200px;">
                      <div class="col-md-6">
                          <form id="selection">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Electronic</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Home Furniture</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Clothing</label>
                            </div>
                          </form>
                    
                      </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="btn-group mr-1">
              
                    <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      SKU#
                    </button>

                    <div class="dropdown-menu" role="menu">
                      <div class="container-fluid">
                      <div class="row" style="overflow: scroll;height: 200px;">
                      <div class="col-md-6">
                          <form id="selection">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">One</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Two</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Three</label>
                            </div>
                          </form>
                    
                      </div>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="btn-group mr-1">
              
                    <button type="button" class="btn  dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      Threshold
                    </button>

                    <div class="dropdown-menu" role="menu">
                      <div class="container-fluid">
                      <div class="row" style="overflow: scroll;height: 200px;">
                      <div class="col-md-6">
                          <form id="selection">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Levis</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Cobb</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="order" value="order">
                              <label class="form-check-label" for="exampleCheck1">Blackberry</label>
                            </div>
                          </form>
                    
                      </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  <!-------------------dropdown--------------------->
            </div>
            <br>
               <div class="col-md-12" style="overflow: auto;">
                <table id="tbl_product" class="table align-items-center table-flush order-column">
                  <thead class="thead-light">
                    <tr>
                      <th>
                        <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox">
                        </div>
                      </th>
                   
                      <th class="alias_column">Product Name</th>
                      <th class="alias_column">Product Type</th>
                      <th class="alias_column">Product description/SKU</th>
                      <th class="alias_column">Sku #</th>
                      <th class="alias_column">receive goods</th>
                      <th class="alias_column">Incoming unit with date</th> 
                      <th class= "alias_column">warehouse</th>                    
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                      <td class="alias_column">Shoes</td>
                      <td class="sku_column">Footwear</td>
                      <td>Footwaer Product</td>
                      <td>22</td>
                      <td>10</td>
                      <td>2-12-22</td>
                      <td>2</td>
                      
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                      <td class="alias_column">Shoes</td>
                      <td class="sku_column">Footwear</td>
                      <td>Footwaer Product</td>
                      <td>22</td>
                      <td>10</td>
                      <td>2-12-22</td>
                      <td>2</td>
                      
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

