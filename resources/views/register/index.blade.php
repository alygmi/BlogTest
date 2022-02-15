@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
        <main class="form-registration">
          <h1 class="h3 mb-4 fw-normal text-center">registration form</h1>
        <form action="/register" method="POST">
          @csrf
          {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}   
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name">
            <label for="name">Name</label>
          </div>
          <div class="form-floating">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
            <label for="username">Username</label>
          </div> 
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
            <label for="password">Password</label> 
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
        </form>
        <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
      </main>
  </div>
</div>
@endsection
