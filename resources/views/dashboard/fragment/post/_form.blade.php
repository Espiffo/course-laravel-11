@csrf

<div>
    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
    <input type="text" name="title" id="title" class="mt-1 block w-full
            p-2 border border-gray-300 rounded-md shadow-sm
            focus:outline-none focus:ring-blue-500 focus:border-blue-500" value="{{ old("title", $post->title) }}">
</div>

<div>
    <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
    <input type="text" name="slug" id="slug"
           class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
           value="{{ old("slug", $post->slug) }}">
</div>

<div>
    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
    <textarea name="content" id="content" rows="4"
              class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                {{ old("content",$post->content) }}
            </textarea>
</div>

<div>
    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
    <select name="category_id" id="category_id"
            class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        <!-- Options go here -->
        @foreach ($categories as $title => $id)
            <option value="{{ $id }}" {{ (old("category_id", $post->category_id) == $id) ? 'Selected' : '' }}>{{ $title }}</option>
        @endforeach
    </select>
</div>

<div>
    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
    <textarea name="description" id="description" rows="2"
              class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                {{ old("description", $post->description) }}
            </textarea>
</div>

<div>
    <label for="posted" class="block text-sm font-medium text-gray-700">Posted</label>
    <select name="posted" id="posted"
            class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        <option value="not" {{ (old("posted", $post->posted) == "not") ? 'Selected' : '' }}>Not</option>
        <option value="yes" {{ (old("posted", $post->posted) == "yes") ? 'Selected' : '' }}>Yes</option>
    </select>
</div>

@if(isset($task) && $task == 'edit')
    <div>
        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
        <input type="file" name="image" id="image">
    </div>
@endif

<div>
    <button type="submit"
            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        Send
    </button>
</div>
