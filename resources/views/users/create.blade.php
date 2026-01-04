@extends('layouts.app')

@section('content')

<div class="card shadow col-md-6 mx-auto">
    <div class="card-header bg-primary text-white">
        <h4>Add User</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter phone">
            </div>

            <div class="text-end">
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-success">Save</button>
            </div>

        </form>
    </div>
</div>

@endsection
