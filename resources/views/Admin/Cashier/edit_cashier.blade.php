@extends('admin.admin_dashboard')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Cashier</h3>
            </div>
            <div class="box-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('cashiers.update', $cashier->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="user_id">User:</label>
                        <select name="user_id" class="form-control" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $cashier->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="department">Department:</label>
                        <input type="text" name="department" class="form-control" value="{{ $cashier->department }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Cashier</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
