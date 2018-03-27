@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table table-hover">
        <thead>
            <th>#</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created</th>
            <th>Updated</th>
            <th>View Post</th>
            <th>Comments</th>
        </thead>
        <tbody>

            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category ? $post->category->name : 'no categories'}}</td>
                        <td><img height="50" src="{{$post->photo ? $post->photo->file : '/image/placeholder.png'}}" alt=""></td>
                        <td><a href="{{ route('admin.posts.edit', $post->id) }}">{{$post->title}}</a></td>
                        <td>{{str_limit($post->body, 20)}}</td>
                        <td>{{$post->created_at->diffForhumans()}}</td>
                        <td>{{$post->updated_at->diffForhumans()}}</td>
                        <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                        <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

@stop