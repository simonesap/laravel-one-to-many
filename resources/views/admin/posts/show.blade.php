@extends('layouts.app')

@section('content')

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>image</th>
                    <th>title</th>
                    <th>content</th>
                    <th>slug</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="{{ $post->image}}" alt="">
                    </td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->content}}</td>
                    <td>{{ $post->slug}}</td>
                    <td>
                        <a href="{{route('admin.posts.edit', $post->id)}}">
                            Modify
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button class="delete-form" type="submit" src="{{ route('admin.posts.destroy', $post->id)}}" class="">Delete</button>

                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/delete-form.js')}}"></script>

@endsection
