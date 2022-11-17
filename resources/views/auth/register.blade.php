@extends('layout.auth')
@section('container-2')
<h1 class="sub-title text-center">Register Page</h1>
<div class="menu mx-4 my-2">
    <a href="/login" class="badge badge-primary">Login</a>
</div>
{{--  allert  --}}
{{--  <div class="alert alert-warning alert-dismissible fade show mx-4" style="display: none" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>  --}}

<form action="/proses_register" class="mx-4 mb-3" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Nama</label>
      <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


