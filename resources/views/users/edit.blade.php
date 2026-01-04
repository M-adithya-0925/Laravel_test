@extends('layouts.app')

@section('content')

<div class="card shadow col-md-6 mx-auto">
    <div class="card-header bg-warning">
        <h4>Edit User</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('users.update',$user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
            </div>

            <div class="text-end">
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-success">Update</button>
            </div>

        </form>
    </div>
</div>

@endsection
