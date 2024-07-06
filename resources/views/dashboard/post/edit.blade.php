@extends('dashboard.master')

@section('title')
    Edit
@endsection

@section('content')

    @include('dashboard.fragment.post._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data"
          class="bg-white p-6 rounded shadow-md space-y-4">

        @method('PUT')
        @include('dashboard.fragment.post._form', ['task' => 'edit'])

    </form>
@endsection
