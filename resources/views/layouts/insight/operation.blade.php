@extends('layouts.app')

@push('page_scripts')
<script type="text/javascript" src="{{asset('js/operation.js')}}" defer></script>
@endpush

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Operations</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Operations</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">

                            <button type="button" class="btn btn-block btn-outline-secondary">12 April - 21
                                April</button>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2 col-6">
                            <!-- small card -->

                            <div class="small-box bg-info" data-toggle="modal" data-target="#bank_model">
                                <div class="inner">
                                    <h3>6213</h3>

                                    <p>User License Issued</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info" data-toggle="modal" data-target="#bank_model">
                                <div class="inner">
                                    <h3>$ 150</h3>

                                    <p>Expire License</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info" data-toggle="modal" data-target="#bank_model">
                                <div class="inner">
                                    <h3>$ 150</h3>

                                    <p>Revenue</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info" data-toggle="modal" data-target="#bank_model">
                                <div class="inner">
                                    <h3>$ 150</h3>

                                    <p>Shipping Unit</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info" data-toggle="modal" data-target="#bank_model">
                                <div class="inner">
                                    <h3>$ 150</h3>

                                    <p>Active License</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="shipments_charts"></div>
                </div>
                <!-- /.card-body-->
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id="shipment_carrier"></div>
            </div>
            <div class="col">
                <div id="shipment_class"></div>
            </div>
            <div class="col">
                <div id="shipment_user"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Current Account Balances</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Stamps.com</td>

                                    <td class="text-danger">$ -1.0</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Amazon.com</td>

                                    <td>$ 121</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>



            </div>
            <div class="col">
                <div id="order_aging"></div>
            </div>

        </div>
    </div>

</section>
</div>

<div class="modal fade" id="bank_model">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modal-fourth">
            <div class="modal-header">
                <h4 class="modal-title">User Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="col-md-12">
                <div class="container">
                    <div class="col-md-12">

                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                            href="#custom-tabs-four-home" role="tab"
                                            aria-controls="custom-tabs-four-home" aria-selected="true">Informations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-four-profile" role="tab"
                                            aria-controls="custom-tabs-four-profile"
                                            aria-selected="false">Permission</a>
                                    </li>


                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">

                                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-home-tab">
                                        <table id="example" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox">
                                                        </div>
                                                    </th>
                                                    <th>SKU #</th>
                                                    <th>Seller Name</th>
                                                    <th>Order</th>
                                                    <th>Store</th>
                                                    <th>Recipient</th>
                                                    <th>Qty</th>
                                                    <th>Price/Unit</th>
                                                    <th>Request Service</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>0098</td>
                                                    <td>Jack</td>
                                                    <td>101</td>
                                                    <td>Amazon</td>
                                                    <td data-toggle="modal" data-id="1" data-target="#customer_data">
                                                        Ship2way support</td>
                                                    <td> 4</td>
                                                    <td>$3.78</td>
                                                    <td>Free Shipping</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                        </div>
                                                    </td>
                                                    <td>4566</td>
                                                    <td>Mack</td>
                                                    <td>102</td>
                                                    <td>Amazon</td>
                                                    <td data-toggle="modal" data-id="1" data-target="#customer_data">
                                                        Ship2way support</td>
                                                    <td> 4</td>
                                                    <td>$3.78</td>
                                                    <td>Free Shipping</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                        </div>
                                                    </th>
                                                    <th>SKU #</th>
                                                    <th>Seller Name</th>
                                                    <th>Order</th>
                                                    <th>Store</th>
                                                    <th>Recipient</th>
                                                    <th>Qty</th>
                                                    <th>Price/Unit</th>
                                                    <th>Request Service</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <h4>Follow these steps to get connected:</h4>

                                        <ul>
                                            <li>Visit the Shipstation Extension page for Acumatica here
                                                https://help.shipstation.com/hc/en-us/articles/360026140871-Acumatica
                                            </li>
                                            <li>Install the cartridge to your Acumatica Instance (if you need assistance
                                                please contact your consultant / VAR)</li>
                                            <li>Configure your connection.</li>
                                            <li>Map the ShipStation Order Statuses to your Acumatica Order Statuses
                                                below. Separate multiple statuses with a comma.</li>

                                        </ul>
                                        <form>
                                            <div class="form-group">
                                                <label for="inputAddress">Base Url</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Username</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Password</label>
                                                <input type="password" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Company Name</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Company ID</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Unpaid Status</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Paid Status</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Shipped Status</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Cancel Status</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress">Onhold Status</label>
                                                <input type="text" class="form-control" id="inputAddress">
                                            </div>
                                            <button type="submit" class="btn btn-primary"
                                                style="float:right">Connect</button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>


                </div>
                <br><br>
            </div>

        </div>
    </div>
</div>
</div>
@endsection