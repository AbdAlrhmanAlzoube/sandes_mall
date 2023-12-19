@extends('admin.admin_dashboard')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
@endif

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Product List</h3>
          <div class="box-tools">
            <div class="input-group">
              <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
              <div class="input-group-btn">
                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>name</th> 
              <th>category</th> 
              <th>price</th> 
              <th>Edit</th>
              <th>Delete</th>
            </tr>
         @forelse ($products as $product)
             <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>     
                <td>{{ $product->category ? $product->category->name : 'N/A'  }}</td>     
                <td>{{ $product->price }}</td>     

                <td>
                  <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
                <td>
                  <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td>

             </tr>
         @empty
             <tr>
                 <td colspan="6">NO Product</td>
             </tr>
         @endforelse
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>

@endsection
