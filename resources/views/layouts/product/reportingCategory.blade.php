@extends('layouts.app')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Reporting Categories</h1>
        </div>
        
        </div>
        <div class="row">
          
            <div class="col-sm-6 col-md-12">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#category" style="float:right">Add Product Category</button>
            </div>
             
        </div>
      </div>
    </section>
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
                  <th>Product Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($reportingCategories as $item)
                <tr>
                  <td>{{$item->name}}</td>
                  <td>
                    <form action="{{route('product.delete-reporting-category')}}" method="post">
                      @csrf
                      <input type="hidden" value="{{$item->id}}" name="id">
                      {{-- TODO Edit  --}}
                      <button class="badge badge-warning"  id="edit{{$item->id}}" data-toggle="modal" data-target="#edit_rep" type="submit"><i class="fa fa-edit"></i></button> 
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

       

