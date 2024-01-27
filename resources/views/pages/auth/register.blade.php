@extends('layouts.register')

@section('content')
<div class="card-body">
<form role="form" action="{{ route('auth.register.post') }}">
    @csrf
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control">
  </div>
  <div class="form-check form-check-info text-start ps-0">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
    <label class="form-check-label" for="flexCheckDefault">
      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
    </label>
  </div>
  <div class="text-center">
    <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
  </div>
</form>
</div>
@endsection
