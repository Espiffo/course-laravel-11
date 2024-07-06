@extends('dashboard.master')

@section('title')
    Create Category
@endsection

@section('content')

    @include('dashboard.fragment.category._errors-form')

    <form action="{{ route('category.store') }}" method="post" class="bg-white p-6 rounded shadow-md space-y-4">
        @include('dashboard.fragment.category._form')
    </form>
@endsection
