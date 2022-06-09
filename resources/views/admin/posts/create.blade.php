@extends('layouts.app')

@section('content')

    <div>
        <form style="display: flex; flex-direction: column; width: 80%; margin: 0 auto;"
              action="{{ route('admin.posts.store')}}" method="POST">
            @csrf

            <label for="image">Image</label>
            <input type="text" value="" name="image">

            <label for="title">Title</label>
            <input type="text" value="" name="title">

            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">

            </textarea>

            <label for="slug">Slug</label>
            <input type="text" value="" name="slug">

            <button type="submit" src="{{route('admin.posts.store')}}">
                Submit
            </button>
        </form>
    </div>



@endsection
