<!-- New orders modal -->
<div class="modal fade" id="New_Orders"  aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Create New Order</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <p>Recipient Information</p>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Company</label>
                          <input type="text" class="form-control" placeholder="Enter Company Name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Country</label>
                          <select class="form-control">
                            <option>United States</option>
                            <option>India</option>
                            <option>Afganistan</option>
                            <option>China</option>
                            <option>South Africa</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Paste US Address</label>
                          <input type="text" class="form-control" placeholder="Enter Address">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Address 1</label>
                          <input type="text" class="form-control" placeholder="Enter Address1">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Address 2</label>
                          <input type="text" class="form-control" placeholder="Enter Address2">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Address 3</label>
                          <input type="text" class="form-control" placeholder="Enter Address3">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>City</label>
                          <input type="text" class="form-control" placeholder="Enter City">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                        <label>State</label>
                        <select class="form-control">
                          <option>AA</option>
                          <option>AL</option>
                          <option>FC</option>
                          <option>LM</option>
                          <option>AK</option>
                        </select>
                      </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Zipcode</label>
                          <input type="text" class="form-control" placeholder="Enter Zipcode">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Phone</label>
                          <input type="text" class="form-control" placeholder="Enter Phone">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control" placeholder="Enter Email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <p>Order Summary Information</p>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Order #</label>
                          <input type="text" class="form-control" placeholder="Enter Order id">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Shipping paid</label>
                          <input type="text" class="form-control" placeholder="$">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Order Date:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Paid Date:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Tax Paid</label>
                          <input type="text" class="form-control" placeholder="$">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Total Paid</label>
                          <input type="text" class="form-control" placeholder="$">
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                  <button type="button" onclick="add()" class="btn btn-outline-primary btn-block"><i class="fa fa-plus"></i>Add Line Item</button>
                  <div class="row">
                    <table id="Addline" class="table table-bordered">
                      <tbody><tr>
                        <th>SKU</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>remove</th>
                      </tr>
                      </tbody><tbody>
                        <tr>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
<!-- New order modal         -->

<!-- Product details modal -->

<div class="modal fade" id="Product_details"  aria-modal="true" role="dialog">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Extra Large Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <!-----------modal body--------->
                      <div class="modal-body">
                        <!---------------tab bar/ nav bar----------------------->
                        <div class="row">
                          <div class="col-12">
                            <div class="card card-secondary card-tabs">
                              <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Order Details</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Return</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                  <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <!---------------Single row----------------->
                                    <div class="row"></div>
                                    <!----------------Single row---------------->
                                    <!---------------- Another row-------------->
                                    <div class="row">
                                      <div class="col-md-6">
                                        <!------------right side parts------------>
                                       <div class="row">
                                         <div class="col-md-6">
                                           <!-- /.Order summary card -->
                                           <div class="card">
                                            <div class="card-header">
                                              <h3 class="card-title">Order Summary</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p>Store</p>
                                                  <p>Order date</p>
                                                  <p>Paid date</p>
                                                  <p>Product total</p>
                                                  <p>Shipping paid</p>
                                                  <p>Tax paid</p>
                                                  <p>Total order</p>
                                                  <p>Total paid</p>
                                                </div>
                                                <div class="col-md-6">
                                                  <p>My store</p>
                                                  <p>2/10/2021</p>
                                                  <p>2/0/2021</p>
                                                  <p>$20.00</p>
                                                  <p>$0.00</p>
                                                  <p>$0.00</p>
                                                  <p>$20.00</p>
                                                  <p>$20.00</p>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                          <!-- /.Order summary card -->
                                         </div>
                                         <div class="col-md-6">
                                           <!-- /.Buyer/ Recipeint Info card -->
                                           <div class="card">
                                            <div class="card-header">
                                              <h3 class="card-title">Buyer/Recipient Info</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p>Sold To</p>
                                                  <p>Ship To</p>
                                                </div>
                                                <div class="col-md-6">
                                                  <p>My store</p>
                                                  <p>39 b-block greater noida</p>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                          <!-- /.Buyer/ Recipeint Info card -->
                                         </div>
                                         
                                       </div>
                                       <div class="row">
                                        <div class="col-md-6">
                                          <!-- /.Order summary card -->
                                       <div class="card">
                                        <div class="card-header">
                                          <h3 class="card-title">Order Item</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                          <table class="table table-sm">
                                            <thead>
                                              <tr>
                                                <th style="width: 10px">Item</th>
                                                <th>Unit</th>
                                                <th>Quantity</th>
                                                <th style="width: 40px">total</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td><img class="img-circle img-bordered-sm" alt="user image" src="../dist/img/user1-128x128.jpg" style="width: 40px;"></td>
                                                <td><p>$30.00</p></td>
                                                <td>
                                                  <p>1</p>
                                                </td>
                                                <td><p>$30.00</p></td>
                                              </tr>
                                              <tr>
                                                <td><img class="img-circle img-bordered-sm" alt="user image" src="../dist/img/user1-128x128.jpg" style="width: 40px;"></td>
                                                <td><p>$30.00</p></td>
                                                <td>
                                                  <p>1</p>
                                                </td>
                                                <td><p>$30.00</p></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                        <!-- /.card-body -->
                                      </div>
                                      <!-- /.Order summary card -->
                                        </div>
                                       </div>
                                       <!---------------right side parts----------->

                                       <div class="row">
                                          <div class="col-md-6">
                                            <!-- /.Order notes card -->
                                           <div class="card">
                                            <div class="card-header">
                                              <h3 class="card-title">Order Notes</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p>Customer</p>
                                                  <p>To Buyer</p>
                                                  <p>Internal</p>
                                                  <p>This is a gift</p>
                                                  <p>Custom field 1</p>
                                                  <p>Custom field 2</p>
                                                  <p>Custom field 3</p>
                                                </div>
                                                <div class="col-md-6">
                                                  <p>none</p>
                                                  <p>none</p>
                                                  <p>none</p>
                                                  <p>No gift</p>
                                                  <p>none</p>
                                                  <p>none</p>
                                                  <p>none</p>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                          <!-- /.Order notes card -->
                                          </div>
                                         </div>
                                      </div>
                                      <div class="col-md-6">
                                        <!-- /.Order summary card -->
                                       <div class="card">
                                        <div class="card-header">
                                          <h3 class="card-title">Shipping</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p>Request</p>
                                            </div>
                                            <div class="col-md-6">
                                              <p>"Free Shipping"</p>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p>Ship from</p>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <select class="form-control">
                                                  <option>Shipstation</option>
                                                  <option>option 2</option>
                                                  <option>option 3</option>
                                                  <option>option 4</option>
                                                  <option>option 5</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p>Weight</p>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <input type="number" class="form-control" id="lb" placeholder="lb">
                                                </div>
                                                <div class="col-md-6">
                                                  <input type="number" class="form-control" id="lb" placeholder="oz">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p>Service</p>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <select class="form-control">
                                                  <option>USPS priority mall</option>
                                                  <option>option 2</option>
                                                  <option>option 3</option>
                                                  <option>option 4</option>
                                                  <option>option 5</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p>Package</p>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <select class="form-control">
                                                  <option>Package</option>
                                                  <option>option 2</option>
                                                  <option>option 3</option>
                                                  <option>option 4</option>
                                                  <option>option 5</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p>Size</p>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <input type="number" class="form-control" id="lb" placeholder="L">
                                                </div>
                                                <div class="col-md-4">
                                                  <input type="number" class="form-control" id="lb" placeholder="W">
                                                </div>
                                                <div class="col-md-4">
                                                  <input type="number" class="form-control" id="lb" placeholder="H">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <p>Confirm</p>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <select class="form-control">
                                                  <option>No Confirmation</option>
                                                  <option>option 2</option>
                                                  <option>option 3</option>
                                                  <option>option 4</option>
                                                  <option>option 5</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              Insaurance
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <select class="form-control">
                                                  <option>None</option>
                                                  <option>option 2</option>
                                                  <option>option 3</option>
                                                  <option>option 4</option>
                                                  <option>option 5</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              Rate
                                            </div>
                                            <div class="col-md-6">
                                              <p class="text-success">$5.76</p>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              Delivery time
                                            </div>
                                            <div class="col-md-6">
                                              <p class="text-success">1 day</p>
                                            </div>
                                          </div>
                                          <button class="btn btn-success">Create label</button>
                                        </div>
                                        <!-- /.card-body -->
                                      </div>
                                      <!-- /.Order summary card -->

                                      <!-- /.Other shipping options card -->
                                           <div class="card">
                                            <div class="card-header">
                                              <h3 class="card-title">Other Shipping Options</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <p>Shipping Account</p>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group">
                                                    <select class="form-control">
                                                      <option>UPS(primary)</option>
                                                      <option>option 2</option>
                                                      <option>option 3</option>
                                                      <option>option 4</option>
                                                      <option>option 5</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                              <p>Shipment options</p>
                                              <div class="row">
                                                <div class="form-group">
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">The shipment requires aditional handling</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">The shipment requires freight classification code</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">This order is non-machinable</label>
                                                  </div>
                                                </div>
                                              </div>
                                              <p>Delivery options</p>
                                              <div class="row">
                                                <div class="form-group">
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Collect payment on delivery</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Saturday delivery</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Driver may release package without signature</label>
                                                  </div>
                                                </div>
                                              </div>
                                              <p>Label options</p>
                                              <div class="row">
                                                <div class="form-group">
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Bill duties and taxesto payor of shipping charges</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">This order includes dry ice</label>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- /.card-body -->
                                          </div>
                                          <!-- /.Other shipping option card -->

                                      </div>
                                    </div>
                                    <!----------------Another row--------------->
                                 </div>
                                 <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                   Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                 </div>
                               </div>
                             </div>
                             <!-- /.card -->
                           </div>
                          </div>
                        </div>
                        <!---------------tab bar/ nav bar----------------------->
                      </div>
                      <!-------modal body-------------->
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
<!-- Product details modal                 -->