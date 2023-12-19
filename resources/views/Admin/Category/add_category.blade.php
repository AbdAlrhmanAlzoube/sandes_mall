@extends('admin.admin_dashboard')

@section('content')
<div class="row">
  <div class="col-xs-12">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Add Category</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <!-- Form for adding a new category -->
              <form action="{{ route('categories.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="name">Category Name:</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Add Category</button>
              </form>
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.box -->
  </div>
</div>
   
@endsection
