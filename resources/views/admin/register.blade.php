@extends('layouts.master')

@section('title')
      Register Roles
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">  Register Roles</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>ID</th>
                      <th>Name</th>
                      <th>phone</th>
                      <th>Email</th>
                      <th>Usertype</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                    @foreach($users as $row)
                      <tr>
                      <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->email}}</td>
                        <td>-{{$row->usertype}}</td>
                        <td>
                        <a href="/role-edit/{{$row->id}}" class="btn btn-success">Edit</a> 
                        </td>
                        <td>
                        <form action="/role-delete/{{$row->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-success">Delete</button> 
                        </form>
                        </td>
                    </tr>
                    @endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection