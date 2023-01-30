@extends('layouts.master')

@section('title')
      Dashboard
@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h1> Edit Role</h1>
<div class="card-body" >

<form action="/role-update/{{ $users->id}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="username" value="{{ $users->name}}" class="form-control">
    
  </div>
   <div class="form-group" >
   <label>Role</label>
  <select name="usertype" class="form-control">
  <option value="admin">admin</option>
  <option value="User">User</option>
</select>
<button type="submit" class="btn btn-success">Update</button>
<a href="/role-register" class="btn btn-success">Cancel</a>
</form>

</div>


</div>
</div>
</div>
</div>
</div>

@endsection

@section('scripts')
@endsection