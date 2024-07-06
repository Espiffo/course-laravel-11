@extends('dashboard.master')

@section('content')
    <div><a href="{{ route('category.create') }}" target="_blank">Create</a></div>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Slug</td>
                <td>Options</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->slug }}</td>
                    <td>
                        <a href="{{ route('category.edit', $c->id) }}">Edit</a>
                        <a href="{{ route('category.show', $c) }}">Details</a>
                        <div>
                            <form action="{{ route('category.destroy', $c) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
