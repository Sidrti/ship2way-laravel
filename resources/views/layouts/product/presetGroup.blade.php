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
                    
                      <th>Name</th>
                      <th>Description</th>
                      <th>Harmonization Code</th>
                      <th>Declarated Value</th>
                      <th>Dimension</th>
                      <th>Weight</th>
                      <th>Domestic Service</th>
                      <th>Domestic Package</th>
                      <th>Domestic Confirmation</th>
                      <th>International Service</th>
                      <th>International Package</th>
                      <th>International Confirmation</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($presetGroups as $item)
                    <tr>
                      <td>
                        <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                    
                      <td>{{$item->name}}</td>
                      <td>{{$item->description}}</td>
                      <td>{{$item->harmonization_code}}</td>
                      <td>{{$item->declared_value}}</td>
                      <td>{{$item->dimenion}}</td>
                      <td>{{$item->weight}}</td>
                      <td>{{$item->domestic_service}}</td>
                      <td>{{$item->domestic_package}}</td>
                      <td>{{$item->domestic_confirmation}}</td>
                      <td>{{$item->international_service}}</td>
                      <td>{{$item->international_package}}</td>
                      <td>{{$item->international_confirmation}}</td>
                      <td>
                        <form action="{{route('product.delete-preset-group')}}" method="post">
                          @csrf
                          <input type="hidden" value="{{$item->id}}" name="id">
                          {{-- TODO Edit  --}}
                          <button class="badge badge-warning"  data-toggle="modal" data-target="#edit_preset"><i class="fa fa-edit"></i></button>
                          <button class="badge badge-danger" id="delete{{$item->id}}" type="submit"><i class="fa fa-trash"></i></button>
                        </form>  
                      </td>
                    </tr>  
                    @endforeach
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

