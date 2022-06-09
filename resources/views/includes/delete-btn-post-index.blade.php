<form action="{{ route('admin.posts.destroy', $data->id)}}" method="POST">
    @method('DELETE')
    @csrf

    <button class="delete-form" type="submit" src="{{ route('admin.posts.destroy', $data->id)}}" class="">Delete</button>

</form>
