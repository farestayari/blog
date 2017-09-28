@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
    <thead>
        <th>
            Image
        </th>
        <th>
            Name
        </th>
        <th>
            Permissions
        </th>
        <th>
            Delete
        </th>
    </thead>

    <tbody>
    @if($users->count()>0)
        @foreach($users as $user)
          <tr>
            <td>
                <img src="#" alt="" width ="60px" height="60px" style="border-radius:50%;">
            </td>
            <td>
                {{$user->name}}
            </td>
            <td>
                @if($user->admin)
                    <a href="{{route('users.not.admin',['id'=>$user->id])}}" class="btn btn-xs btn-danger">Remove permissions</a>
                @else
                    <a href="{{route('users.admin',['id'=>$user->id])}}" class="btn btn-xs btn-success">Make admin</a>
                @endif
            </td>
            <td>
                Delete
            </td>

          </tr>
      @endforeach
    @else
        <tr>
                <th colspan="5" class="text-center">No users yet</th>
        </tr>
    @endif

    </tbody>
</table>
        </div>
    </div>
    
@endsection