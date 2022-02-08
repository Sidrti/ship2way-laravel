 <div class="modal fade" id="modal">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Export Fulfilments</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="export">
                    <p>Only Export Records that are selected</p>
              </div>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" name="export">
                <p>Export <b>ALL</b> records</p>
          </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Export Now</button>
            </div>
          </div>
        </div>
      </div>

{{-- <!--Modal: modalRelatedContent-->
<div class="modal fade right" id="customerProfileModal" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        <div class="row">
          <div class="col-5">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(55).webp"
              class="img-fluid" alt="">
          </div>

          <div class="col-7">
            <p><strong>Siddhant Singh</strong>lives in <strong>New Delhi.</strong>His/her Telephone Number is <strong>
              +91 838485868</strong> and his/her social id is <strong>www.facebook.com/sssbia</strong></p>

          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div> --}}


<div class="modal fade" id="customerProfileModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
              <h4 class="modal-title" id="myModalLabel">More About Joe</h4>
              </div>
          <div class="modal-body">
              <div class="text-center">
              <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
              <h3 class="media-heading">Joe Sixpack <small>USA</small></h3>
              <span><strong>Skills: </strong></span>
                  <span class="label label-warning">HTML5/CSS</span>
                  <span class="label label-info">Adobe CS 5.5</span>
                  <span class="label label-info">Microsoft Office</span>
                  <span class="label label-success">Windows XP, Vista, 7</span>
              </div>
              <hr>
              <center>
              <p class="text-left"><strong>Bio: </strong><br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
              <br>
              </center>
          </div>
          <div class="modal-footer">
              <center>
              <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
              </center>
          </div>
      </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="customerProfileModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header text-center">
        <h4 class="modal-title">Profile Information</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="text-center">
          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
          <h3 class="media-heading">Siddhant Singh<small>, India</small></h3>
        </div>
        <div class="text-center">
          <span><strong>Mobile: </strong>+91 8384863081</span><br>
          <span><strong>Email ID: </strong>siddhant.singh326@gmail.com</span><br>
          <span><strong>Address: </strong>H Block,Kanpur</span><br>
          <span><strong>Social ID: </strong>https://fb.com/sssbia</span><br>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="trackingNumberModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <div>
        <h4 class="modal-title">Tracking Number Information</h4>
        <span><small>87867567890</small></span>
       
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    
        <div class="table-responsive">
          <table id="recent_shipments" class="table align-items-center table-flush order-column">
              <thead class="thead-light">
                  <tr>
   
                    <th>SR NO</th>
                    <th>Product Name</th>
                    <th>SKU</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Color</th>
                    <th>Qty</th>
                    <th>Weight</th>
                  
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>1</td>
                    <td>Tshisrts</td>
                    <td>187</td>
                    <td> Seven Rocks. </td>
                    <td>                                            
                      <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder"
                          src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                  </a>
                </td>
                <td>Black</td>
                <td>2</td>
                <td>2 KG</td>
              
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Tshisrts</td>
                    <td>187</td>
                    <td> Seven Rocks. </td>
                    <td>                                            
                      <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder"
                          src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                  </a>
                </td>
                <td>Black</td>
                <td>2</td>
                <td>2 KG</td>
                  </tr>
              </tbody>
          </table>

      </div>
    </div>
    </div>
  </div>
</div>


<div class="modal" id="carrierModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Carrier Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <span class="badge badge-success">Status - Delivered</span><br>
        <span class="badge">Carrier - USPC First</span><br>
        
        <span class="badge">Mobile - +91-8279607423</span><br>
        <span class="badge">Address - B-183 Ashiyana-1, Moradabad, UP, 208011</span>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="warehouseModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Warehouse Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <span class="badge">Warehouse - USPC First</span><br>
        <span class="badge">Mobile - +91-8279607423</span><br>
        <span class="badge">Email - +siddhant.singh326@gmail.com</span><br>
        <span class="badge">Address - B-183 Ashiyana-1, Moradabad, UP, 208011</span>
      </div>
    </div>
  </div>
</div>