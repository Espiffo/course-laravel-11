@extends('dashboard.master')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-4">Post Details</h1>

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <p class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ $post->title }}</p>
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
            <p class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ $post->slug }}</p>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <p class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ $post->content }}</p>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
            <p class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">
                {{ $post->category->title }}
            </p>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <p class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ $post->description }}</p>
        </div>

        <div class="mb-4">
            <label for="posted" class="block text-sm font-medium text-gray-700">Posted</label>
            <p class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm">{{ $post->posted == 'yes' ? 'Yes' : 'Not' }}</p>
        </div>

        @if(isset($post->image))
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <img src="{{ asset('/uploads/posts/' . $post->image) }}" alt="Post Image" class="mt-1 w-full rounded-md shadow-md">
            </div>
        @endif

        <div>
            <a href="{{ route('post.index') }}" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">Back to Posts</a>
        </div>
    </div>
@endsection
