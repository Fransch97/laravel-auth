@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{old('title', $post->title)}}">
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
            @error('content')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
</div>
@endsection
