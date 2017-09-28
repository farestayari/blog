@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel panel-heading">
            Published Posts
        </div>
        <div class="panel-body">
            <table class="table table-hover">
    <thead>
        <th>
            Image
        </th>
        <th>
            Title
        </th>
        <th>
            Edit
        </th>
        <th>
            Trash
        </th>
    </thead>

    <tbody>
      @foreach($posts as $post)
          <tr>
            <td><img src="{{$post->featured}}" alt="{{$post->title}}" width = "90px" height = "50px"></td>
            <td>{{$post->title}}</td>
            <td>
                <a href="{{ route('posts.edit', ['id'=>$post->id]) }}" class="btn btn-info">Edit</a>
            </td>
            <td>
                <a href="{{ route('posts.delete', ['id'=>$post->id]) }}" class="btn btn-xs btn-danger">Trash</a>
            </td>
          </tr>
      @endforeach
    </tbody>
</table>
        </div>
    </div>
    
@endsection