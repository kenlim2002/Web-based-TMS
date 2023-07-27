@extends('layout')
@section('title', 'Login')
@section('content')
<div class="container mt-5">
  <form action="{{route('login')}}" method="POST" class="ms-auto me-auto mt-auto px-4 py-4 rounded" style="width: 500px; background-color:white;">
    @csrf 
    <div class="mb-3"> 
      @if(session('error'))
      <div class="alert alert-danger mt-3">
          No Record Found!
      </div>
  @endif
      <h1 class="text-center fw-bold " style="color: #a91414;">Login Portal </h1> <!-- Added class "text-center" to center the text -->
      <label class="form-label text-black">Email address</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email">
      @error('email')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label text-black">Password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password">
      @error('password')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <button type="submit" class="btn " style="padding: 4px 200px; background-color:#a91414; color:white; hover:#a91414;">Submit</button>
    <div class="row">
      <div class="col-6 d-flex justify-content-start">        
          <a class="navbar-brand" href="{{ route('home') }}">
              <p class="text-danger fw-light">Forgot Password?</p>
          </a>
      </div>
  
      <div class="col-6 d-flex justify-content-end">        
          <a class="navbar-brand" href="{{ route('registration') }}">
              <p class="text-danger fw-light"><span class="text-black">New?</span>&nbsp;Register</p>
          </a>
          
      </div>
  </div>
  



  </form>



</div>






@endsection