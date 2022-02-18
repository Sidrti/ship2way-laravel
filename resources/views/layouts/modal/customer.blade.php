<div class="modal fade" id="importCustomer">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Import Customers</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="col-md-12">
                <div class="container">

                  <p>If you'd like to import product alias information from a spreadsheet or other datasource, you can provide your data in our standard CSV file format. For more information about importing product aliases, click here.</p>

                  <a href=""><h5>Download a sample CSV file</h5></a>
                  <br>
                  <h5>1. Select a File to Import</h5>
                  
                  <input type="file" value="Select A File">
                  <br>
                  <br>
                  <h5>2. Select Options</h5>
                  
                  <p>ShipStation will match the new data against your existing records based on username. If the username is already on file...</p>

                  <div class="col-8">
                      <div class="form-check">
                      <input class="form-check-input" type="radio">
                      <label class="form-check-label">Update the existing record with the csv</label>
                    </div>
                  </div>
                  
                  <div class="col-8">
                      <div class="form-check">
                      <input class="form-check-input" type="radio">
                      <label class="form-check-label">
                        Ignore the record in the csv only customers with new usernames will import
                      </label>
                    </div>
                  </div>
                  <br>
                 
                </div>
              </div>
            </div>
            <br><br>
           
            <div class="modal-footer justify-content-right">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    </div>