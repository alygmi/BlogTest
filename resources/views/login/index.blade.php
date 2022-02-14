@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
        <main class="form-signin">
          <h1 class="h3 mb-4 fw-normal text-center">Please Log in</h1>
        <form>
          {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}    
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        </form>
        <small class="d-block text-center mt-3">not registered? <a href="/register">register now!</a></small>
      </main>
  </div>
</div>
@endsection
