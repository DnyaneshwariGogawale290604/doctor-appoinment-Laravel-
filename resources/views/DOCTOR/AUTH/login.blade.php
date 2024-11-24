@section('title','login')

@extends('DOCTOR.Layout.auth.doctor')
@section('content')

<div class="card" style="width: 59%;">
  <div class="card-header">LOGIN</div>
  <div class="card-body">
  <form method="POST" action={{route('doctor.login.save')}}>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password"id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('doctor.registration')}}">CREATE NEW ACCOUNT</a>
</form>
  </div>
</div>

@endsection