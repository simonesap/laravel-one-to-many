@extends('layouts.app')

@section('content')

    <div>
        <div>
            @if ('message')
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
        </div>

        <div>
            <a href="{{route('admin.posts.create')}}">
                Create Post
            </a>
        </div>

        @forelse ($datas as $data )
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
                    <img src="{{ $data->image}}" alt="">
                </td>
                <td>{{ $data->title}}</td>
                <td>{{ $data->content}}</td>
                <td>{{ $data->slug}}</td>
                <td>
                    <a href="{{route('admin.posts.show', $data->id)}}">
                      View
                  </a>
                </td>
                <td>
                  <a href="{{route('admin.posts.edit', $data->id)}}">
                      Modify
                  </a>
                </td>
                <td>
                    {{-- <form action="{{ route('admin.posts.destroy', $data->id)}}" method="POST">
                        @method('DELETE')
                        @csrf

                        <button class="delete-form" type="submit" src="{{ route('admin.posts.destroy', $data->id)}}" class="">Delete</button>

                    </form> --}}
                    @include('includes.delete-btn-post-index')
                </td>
              </tr>
            </tbody>
          </table>
        @empty

        @endforelse
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/delete-form.js')}}"></script>

@endsection
