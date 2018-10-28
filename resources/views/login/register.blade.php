@extends('layout.index')
@section('content')
  <body>
<div class="row">
  <div class="col-md-4 register-userlist">
        <h1 class="h3 mb-3 font-weight-normal">Current User List</h1>
        <ul>
          <li>Hard-coded user 1</li>
          <li>Hard-coded user 2</li>
          <li>Hard-coded user 3</li>
        </ul>
  </div>
  <aside class="col-md-8 register-login">
    <form class="form-signin" method="POST" action="/register.html">
        {{ csrf_field() }}

      <div class="text-center mb-4">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Registration</h1>
      </div>

      <div class="form-label-group">
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required autofocus>
        <label for="inputEmail">Name</label>
      </div>

      <div class="form-label-group">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <label for="password">Password</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password Confirmed" required>
        <label for="password_confirmation">Confirm Password</label>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
  </aside class="col-md-8">
</div>
</body>
@endsection