@extends('layout2')
@section('title', 'User Details')
@section('content')
@auth
    @include('include.sidebar')
    <div class="content">
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>User Details:</h3>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
            </div>
        </div>
    </div>
@endauth
@endsection
