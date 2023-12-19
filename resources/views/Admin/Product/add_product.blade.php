@extends('admin.admin_dashboard')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- Form for adding a new Product -->
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Product name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Product Description:</label>
                        <textarea name="description" class="form-control" placeholder="Enter Product description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price:</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter Product price" required>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Product Category:</label>
                        <select name="category_id" class="form-control" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection
