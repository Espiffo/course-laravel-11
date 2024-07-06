@extends('dashboard.master')

@section('title')
    Edit Category
@endsection

@section('content')

    @include('dashboard.fragment.category._errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data"
          class="bg-white p-6 rounded shadow-md space-y-4">

        @method('PUT')
        @include('dashboard.fragment.category._form')

    </form>
@endsection
