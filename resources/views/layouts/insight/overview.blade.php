@extends('layouts.app')
@push('page_scripts')
<script type="text/javascript" src="{{asset('js/overview.js')}}" defer></script>
@endpush

@section('content')


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Overview</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Overview</li>
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

              <button type="button" class="btn btn-block btn-outline-secondary">12 April - 21 April</button>
            </h3>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-4">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>21</h3>

                  <p>Request for Quotation</p>
                </div>
                <div class="icon">
                  <i class="fas fa-shopping-cart"></i>
                </div>

              </div>
            </div>
            <div class="col-4">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>42</h3>

                  <p>Shipments</p>
                </div>
                <div class="icon">
                  <i class="fas fa-dollar-sign"></i>
                </div>

              </div>
            </div>
            <div class="col-4">
              <!-- small card -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>8</h3>

                  <p>Invoices to Pay</p>
                </div>
                <div class="icon">
                  <i class="fas fa-dollar-sign"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.card-body-->
      </div>
    </div>
    <div class="row">
      <div class="col-3">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">You Earn</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">

            <h3 class="text-center mt-3">$ 1200</h3>
            <div class="text-center mb-5 mt-4">
              <button class="btn btn-primary border">Open Billing</button>
            </div>

          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <div class="col-9">
        <div class="card">
          <div id="earn_line_graph"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Sales By Store</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <tbody>
                <tr>
                  <td>New ChannelAdvisor Store</td>
                  <td class="text-success">$ 100</td>
                </tr>
                <tr>
                  <td>WoCommerce Store</td>
                  <td class="text-success">$ 90</td>
                </tr>
                <tr>
                  <td>Albert Store</td>
                  <td class="text-success">$ 60</td>
                </tr>
                <tr>
                  <td>Manual Store</td>
                  <td class="text-success">$ 50</td>
                </tr>
                <tr>
                  <td>Chirag Store</td>
                  <td class="text-success">$ 10</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div id="shipment_carrier"></div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div id="delivery"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">


          <div class="card-body">
            <div class="row">
              <div class="col">
                <h4 class="card-title">$ 29,000</h4>
              </div>
              <div class="col">
                <a href="#" class="float-right">View Report</a>
              </div>
            </div>

            <p class="card-title">Total Sales</p>

          </div>

          <div id="total_sales"></div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h4 class="card-title">12,000</h4>
                <p class="card-title">Online Store Sessions</p>
              </div>
              <div class="col">
                <a href="#" class="float-right">View Report</a>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col">
                Visitors
              </div>
              <div class="col">
                <p class="float-right">10,000</p>
              </div>
            </div>

          </div>

          <div id="session_over_time"></div>
        </div>
      </div>
      <div class="col">
        <div class="card">

          <div class="card-body">
            <div class="row">
              <div class="col">
                <h4 class="card-title">25 %</h4>
              </div>
              <div class="col">
                <a href="#" class="float-right">View Report</a>
              </div>
            </div>

            <p class="card-title">Returning Customer Rate</p>

          </div>

          <div id="returning_customer_rate"></div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">


          <div class="card-body">
            <div class="row">
              <div class="col">
                <h4 class="card-title">$ 1200</h4>
              </div>
              <div class="col">
                <a href="#" class="float-right">View Report</a>
              </div>
            </div>

            <p class="card-title">Avg Order Value</p>

          </div>

          <div id="avg_order_value"></div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h4 class="card-title">1.36 %</h4>
                <p class="card-title" style="font-size: 12px;">Online Store Conversion Rate</p>
              </div>
              <div class="col">
                <a href="#" class="float-right">View Report</a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <h5 class="card-title">Conversion Funnel</h5>
              </div>

            </div>
            <div class="row mt-2">
              <div class="col">
                <p>Added to cart</p>
                <p class="text-secondary text-sm" style="margin-top:-15px !important ;">21 Session</p>
              </div>
              <div class="col">
                <p class="float-right">5.25 %</p>
              </div>
            </div>
            <div class="row minus-margin-top">
              <div class="col">
                <p>Sessions Converted</p>
                <p class="text-secondary text-sm" style="margin-top:-15px !important ;">22</p>
              </div>
              <div class="col">
                <p class="float-right">5.25 %</p>
              </div>
            </div>
            <div class="row minus-margin-top">
              <div class="col">
                <p>Reached Checkout</p>
                <p class="text-secondary text-sm" style="margin-top:-15px !important ;">17</p>
              </div>
              <div class="col">
                <p class="float-right">5.25 %</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">

          <div class="card-body">
            <div class="row">
              <div class="col">
                <h4 class="card-title">250</h4>
              </div>
              <div class="col">
                <a href="#" class="float-right">View Report</a>
              </div>
            </div>

            <p class="card-title">Total Orders</p>

          </div>

          <div id="total_orders"></div>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Sales By Store</h3>
            <a href="" class="float-right">View Report</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <tbody>
                <tr>
                  <td>Spring Bar Pipes</td>
                  <td>12</td>
                  <td class="text-success">+ 10</td>
                </tr>
                <tr>
                  <td>Earphone</td>
                  <td>12</td>
                  <td class="text-danger">- 90</td>
                </tr>
                <tr>
                  <td>Rubber Strap</td>
                  <td>120</td>
                  <td class="text-success">+ 60</td>
                </tr>
                <tr>
                  <td>Cornflakes</td>
                  <td>30</td>
                  <td class="text-success">+ 10</td>
                </tr>
                <tr>
                  <td>Leather Strap</td>
                  <td>1200</td>
                  <td class="text-danger">- 60</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Online Store Session By Location</h3>
            <a href="" class="float-right">View Report</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <tbody>
                <tr>
                  <td>America</td>
                  <td>12</td>
                  <td class="text-success">+ 10</td>
                </tr>
                <tr>
                  <td>India</td>
                  <td>12</td>
                  <td class="text-danger">- 90</td>
                </tr>
                <tr>
                  <td>Thailand</td>
                  <td>120</td>
                  <td class="text-success">+ 60</td>
                </tr>
                <tr>
                  <td>Australia</td>
                  <td>30</td>
                  <td class="text-success">+ 10</td>
                </tr>
                <tr>
                  <td>England</td>
                  <td>1200</td>
                  <td class="text-danger">- 60</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Online Store Session By Device Type</h3>
            <a href="" class="float-right">View Report</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <tbody>
                <tr>
                  <td>Mobile</td>
                  <td>12</td>
                  <td class="text-success">+ 10</td>
                </tr>
                <tr>
                  <td>Tablet</td>
                  <td>12</td>
                  <td class="text-danger">- 90</td>
                </tr>
                <tr>
                  <td>Desktop</td>
                  <td>120</td>
                  <td class="text-success">+ 60</td>
                </tr>
                <tr>
                  <td>TV</td>
                  <td>30</td>
                  <td class="text-success">+ 10</td>
                </tr>
                <tr>
                  <td>Unknown</td>
                  <td>1200</td>
                  <td class="text-danger">- 60</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection