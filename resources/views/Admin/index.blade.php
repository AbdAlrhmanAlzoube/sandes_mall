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
          <h3 class="box-title">Category List</h3>
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
            </tr>
         @forelse ($categories as $category)
             <tr>
                <th>{{$category->id}}</th>
                <th>{{$category->name}}</th>     

                <td>
                  <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
              </td>
              <td>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>

             </tr>
         @empty
             <H4>NO Category</H4>
         @endforelse
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>

@endsection
