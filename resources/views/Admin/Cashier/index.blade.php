@extends('admin.admin_dashboard')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Cashiers</h3>
            </div>
            <div class="box-body">
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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cashiers as $cashier)
                            <tr>
                                <td>{{ $cashier->id }}</td>
                                <td>{{ $cashier->user->name }}</td>
                                <td>{{ $cashier->department }}</td>
                                <td>
                                    <a href="{{ route('cashiers.edit', $cashier->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('cashiers.destroy', $cashier->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No Cashiers found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
