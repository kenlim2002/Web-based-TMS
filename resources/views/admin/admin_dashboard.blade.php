@extends('layout2')
@section('title', 'Dashboard')
@section('content')
@auth
      @include('include.sidebar')
      <div class="content ">
        <h1> Dashboard</h1>
        <h1> hello world</h1>
        @include('include.chart')
        <div class="row">
          <div class="col-md-3">
            <div class="card bg-danger text-white fw-bold" style="width: 100%; border-bottom: 5px solid #bd301e;">
                <div class="card-body text-end">
                  <h3 class="card-text">{{$TotalUsers}}</h3>
                  <h5 class="card-title"><i class="bi bi-people-fill"></i> &nbsp;Users</h5>
                  <a class="card-text" href="{{ route('users.index') }}" style="text-decoration: none;">
                    <p class="text-light fw-light">View Users&nbsp;<i class="bi bi-eye-fill"></i></p>
                </a>
                </div>
              </div>
        </div>
          <div class="col-md-3">
            <div class="card bg-primary  text-white " style="width: 100%;    border-bottom: 5px solid #005e75;">
              <div class="card-body text-end">
                <h3 class="card-text ">₱ 102,204.00</h3>
                <h5 class="card-title fw-bold"><i class="bi bi-clipboard-data"></i> &nbsp;Total Collections</h5>
                <a class="card-text" href="{{ route('users.index') }}" style="text-decoration: none;">
                  <p class="text-light fw-light">View Collections&nbsp;<i class="bi bi-eye-fill"></i></p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-success text-white fw-bold" style="width: 100%;    border-bottom: 5px solid#135436;">
              <div class="card-body text-end">
                <h5 class="card-text ">Report of Disbursement:₱ 250,300.00</h5>
                <h5 class="card-text ">RPT: ₱ 250,300.00</h3>
                  <h5 class="card-title fw-bold"><i class="bi bi-clipboard-pulse"></i> &nbsp;Current Report</h5>
                  <a class="card-text" href="{{ route('users.index') }}" style="text-decoration: none;">
                    <p class="text-light fw-light">View Report&nbsp;<i class="bi bi-eye-fill"></i></p>
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
    </div>
@endauth
@endsection
