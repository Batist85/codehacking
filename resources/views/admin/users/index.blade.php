@extends('layouts.admin')

@section('content')
  <h1>Users</h1>

  @if(Session::has('deleted_user'))
      <p class="bg bg-danger">{{session('deleted_user')}}</p>
  @endif
  @if(Session::has('updated_user'))
      <p class="bg bg-primary">{{session('updated_user')}}</p>
  @endif
  @if(Session::has('created_user'))
      <p class="bg bg-success">{{session('created_user')}}</p>
  @endif

  <table class='table table-hover'>
    <thead class="thead-inverse">
      <tr>
        <th>#</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Joined</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @if($users)
        @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo ? $user->photo->file : '/image/placeholder.png'}}" alt=""></td>
            <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'active' : 'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach
      @endif
    </tbody>
  </table>

@stop