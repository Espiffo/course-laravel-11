@extends('dashboard.master')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-4">Category Details</h1>

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <p class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ $category->title }}</p>
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <p class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ $category->slug }}</p>
        </div>

        <div>
            <a href="{{ route('category.index') }}" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">Back to Posts</a>
        </div>
    </div>
@endsection
