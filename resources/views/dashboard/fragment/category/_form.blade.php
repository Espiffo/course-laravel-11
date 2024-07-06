@csrf

<div>
    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
    <input type="text" name="title" id="title" class="mt-1 block w-full
            p-2 border border-gray-300 rounded-md shadow-sm
            focus:outline-none focus:ring-blue-500 focus:border-blue-500" value="{{ old("title", $category->title) }}">
</div>

<div>
    <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
    <input type="text" name="slug" id="slug"
           class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
           value="{{ old("slug", $category->slug) }}">
</div>

<div>
    <button type="submit"
            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        Send
    </button>
</div>
