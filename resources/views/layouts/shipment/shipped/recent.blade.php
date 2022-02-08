@extends('layouts.app')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h1>Recent Shipment</h1>
            </div>
        </div>
        <div class="row">
            <div class="mr-1">
             <div class="btn-group">
                <button class="btn border" id="print">Print</button>
                <button class="btn border mr-1">Void Shipment(s)</button>
                <button class="btn border mr-1">Track Shipment(s)</button>
                <button class="btn border mr-1">Create Return</button>
                <button class="btn border mr-1">Resend Confirmation</button>
                <button class="btn border" id="export">Export</button>
                <button class="btn border mr-1" disabled>Notify Marketplaces</button>
            </div>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row mb-2">
                        <h3 class="card-title">Filters :</h3>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <div class="" data-toggle="button" role="group">
                                <div class="btn-group btn-group-display">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" >Vendor</button>
                                <div class="dropdown-menu" role="menu" >
                                    <a class="dropdown-item" href="#">USPC</a>
                                    <a class="dropdown-item" href="#">Amazon</a>
                                </div>
                                </div>
                                <div class="btn-group btn-group-display">
                                <button type="button" class="btn dropdown-toggle"
                                    data-toggle="dropdown" >Marketplace</button>
                                <div class="dropdown-menu" role="menu" >
                                    <a class="dropdown-item" href="#">Flipkart</a>
                                    <a class="dropdown-item" href="#">Amazon</a>
                                </div>
                                </div>
                                <div class="btn-group btn-group-display">
                                <button type="button" class="btn dropdown-toggle"
                                    data-toggle="dropdown">Carrier</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#">USPC</a>
                                    <a class="dropdown-item" href="#">TedEx</a>
                                </div>
                                </div>
                                <div class="btn-group btn-group-display">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Ship
                                    From</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#">Warehouse</a>
                                    <a class="dropdown-item" href="#">Selling Station</a>
                                </div>
                                </div>
                                <div class="btn-group btn-group-display">
                                <button type="button" class="btn dropdown-toggle"
                                    data-toggle="dropdown">Country</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#">India</a>
                                    <a class="dropdown-item" href="#">America</a>
                                </div>
                            </div>
                            
                            <div class="btn">
                                <span class="">Ship Date - </span>
                                <input  class="input-date" id="daterange-btn" value="" readonly>
                            </div>
                            
                            
                            <button type="button" class="btn">Other</button>
                            
                            <div class="btn-group btn-group-display">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Shipping
                                    Account</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#">Hermes</a>
                                    <a class="dropdown-item" href="#">Parcel Force</a>
                                </div>
                            </div>
                                <div class="badge">
                                    <i class="fa fa-times text-danger ml-2 mt-1" aria-hidden="true"></i>
                                    <span class="text-danger ml-1">Clear</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="recent_shipments" class="table align-items-center table-flush order-column">
                            <thead class="thead-light">
                                <tr>
                                    <th>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </th>
                                    <th>Notifications</th>
                                    <th>Vendor Name</th>
                                    <th>Picking Number #</th>
                                    <th>Order #</th>
                                    <th>Marketplace</th>
                                    <th>Customer</th>
                                    <th>Carrier</th>
                                    <th>Ship Date</th>
                                    <th>Tracking #</th>
                                    <th>Ship From</th>
                                    <th>Shipping Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td><i class="fas fa-cart-plus mr-1 text-success"></i>
                                        <i class="fas fa-envelope mr-1"></i>
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                    </td>
                                    <td>Raj Foot</td>
                                    <td>001812</td>
                                    <td><span class="badge badge-dark order">CSV 126</td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">Amazon</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td><a href="#" class="customer">Siddhant</a></td>
                                    <td class="carrier">USPCC First</td>
                                    <td>04/04/2021</td>
                                    <td class="trackingNumber">97896868689</td>
                                    <td class="warehouse">Ship2way</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td><i class="fas fa-cart-plus mr-1"></i>
                                        <i class="fas fa-envelope mr-1"></i>
                                        <i class="fas fa-map-marker-alt mr-1 text-success"></i>
                                    </td>
                                    <td>Sharma</td>
                                    <td>001812</td>
                                    <td><span class="badge badge-dark">CSV 126</td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">Amazon</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td><a href="#" class="customer">Siddhant</a></td>
                                    <td class="carrier">USPC First</td>
                                    <td>04/04/2021</td>
                                    <td class="trackingNumber">97896868689</td>
                                    <td class="warehouse">Ship2way</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td><i class="fas fa-cart-plus mr-1 text-success"></i>
                                        <i class="fas fa-envelope mr-1"></i>
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                    </td>
                                    <td>Vendor</td>
                                    <td>783478</td>
                                    <td><span class="badge badge-dark order">CSV 126</td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">Amazon</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td><a href="#" class="customer">Siddhant</a></td>
                                    <td  class="carrier">USPC First</td>
                                    <td>04/04/2021</td>
                                    <td class="trackingNumber">97896868689</td>
                                    <td class="warehouse">Ship2way</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td><i class="fas fa-cart-plus mr-1 text-success"></i>
                                        <i class="fas fa-envelope mr-1"></i>
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                    </td>
                                    <td>Raj Foot</td>
                                    <td>032323</td>
                                    <td><span class="badge badge-dark order">CSV 126</td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder"
                                                    src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">Amazon</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td><a href="#" class="customer">Siddhant</a></td>
                                    <td  class="carrier">USPC First</td>
                                    <td>04/04/2021</td>
                                    <td class="trackingNumber">97896868689</td>
                                
                                    <td class="warehouse">Ship2way</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
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
                <!-- /.card-body -->
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>
@endsection