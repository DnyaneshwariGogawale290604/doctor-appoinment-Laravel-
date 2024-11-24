@section('title','signup')

@extends('DOCTOR.Layout.auth.doctor')
@section('content')

<div class="card" style="width: 59%;">
  <div class="card-header">SIGN-UP</div>
  <div class="card-body">

  <form action="{{route('doctor.registration.save')}}" method="post">
    @csrf
  <div class="mb-3">
  <div class="input-group">
  <span class="input-group-text">FULL NAME</span>
  <input type="text" aria-label="First name" class="form-control" name="name"> 


</div>
<div class="form-floating">
  <textarea class="form-control" placeholder="speciality" name="specialization" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Specialization</label>
</div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"placeholder="We'll never share your email with anyone else." class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control"name="password_confirmation" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button> 
  <hr>
  ALREADY HAVE AN ACCOUNT?<a href="{{route('doctor.login')}}">LOGIN</a>

</form>
  </div>
</div>
@endsection