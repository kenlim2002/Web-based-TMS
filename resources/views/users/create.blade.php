@extends('layout2')
@section('title', 'Create User')
@section('content')
@auth
    @include('include.sidebar')
    <div class="content">
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Create New User:</h3>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Create User</button>
                    <!-- Display errors, if any -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

                </form>

            </div>
        </div>
    </div>
@endauth
@endsection
