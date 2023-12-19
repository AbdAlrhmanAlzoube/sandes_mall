@extends('admin.admin_dashboard')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- Form for editing a Product -->
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}" >
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price:</label>
                        <input type="number" name="price" class="form-control" value="{{ $product->price }}" >
                    </div>
                    <div class="form-group">
                        <label for="category_id">Product Category:</label>
                        <select name="category_id" class="form-control" >
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection
