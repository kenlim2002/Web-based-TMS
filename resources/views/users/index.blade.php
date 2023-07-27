@extends('layout2')
@section('title', 'User Client')
@section('content')
@auth
    @include('include.sidebar')
    <div class="content">
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>List of Users:</h3>
                <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Add</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">View</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endauth
@endsection