@extends('layouts.app')

@section('content')

    <div>
        <form style="display: flex; flex-direction: column; width: 80%; margin: 0 auto;"
              action="{{ route('admin.posts.update', $post->id)}}" method="POST">
              @method('PUT')
                @csrf

            <label for="image">Image</label>
            <input type="text" value="{{$post->image}}" name="image" required>

            <label for="title">Title</label>
            <input type="text" value="{{$post->title}}" name="title" required>

            <label for="content">Content</label>
            <textarea value="{{$post->content}}" name="content" id="content" cols="30" rows="10" required>

            </textarea>

            <label for="slug">Slug</label>
            <input type="text" value="{{$post->slug}}" name="slug" required>

            <button type="submit" src="{{route('admin.posts.update', $post->id)}}">
                Submit
            </button>
        </form>
    </div>



@endsection
