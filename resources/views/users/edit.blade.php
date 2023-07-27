@extends('layout2')
@section('title', 'Edit User')
@section('content')
@auth
    @include('include.sidebar')
    <div class="content">
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Edit User:</h3>
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endauth
@endsection