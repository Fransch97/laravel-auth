@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $posts as $post)

            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id)}}">Edit</a>
                    <a class="btn btn-warning" href="{{ route('admin.posts.show', $post->id)}}">Show</a>
                    <a class="btn btn-danger" href="{{ route('admin.posts.destroy', $post->id)}}">Delete</a>
                </td>
            </tr>


        @endforeach

    </tbody>
  </table>
@endsection
