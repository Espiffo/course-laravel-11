@csrf

<div>
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-input" value="{{ old('title', $post->title) }}">
</div>

<div>
    <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" id="slug" class="form-input" value="{{ old('slug', $post->slug) }}">
</div>

<div>
    <label for="content" class="form-label">Content</label>
    <textarea name="content" id="content" rows="4" class="form-textarea">{{ old('content', $post->content) }}</textarea>
</div>

<div>
    <label for="category_id" class="form-label">Category</label>
    <select name="category_id" id="category_id" class="form-select">
        <!-- Options go here -->
        @foreach ($categories as $title => $id)
            <option value="{{ $id }}" {{ (old('category_id', $post->category_id) == $id) ? 'selected' : '' }}>{{ $title }}</option>
        @endforeach
    </select>
</div>

<div>
    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description" rows="2" class="form-textarea">{{ old('description', $post->description) }}</textarea>
</div>

<div>
    <label for="posted" class="form-label">Posted</label>
    <select name="posted" id="posted" class="form-select">
        <option value="not" {{ (old('posted', $post->posted) == 'not') ? 'selected' : '' }}>Not</option>
        <option value="yes" {{ (old('posted', $post->posted) == 'yes') ? 'selected' : '' }}>Yes</option>
    </select>
</div>

@if(isset($task) && $task == 'edit')
    <div>
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-input">
    </div>
@endif

<div>
    <button type="submit" class="form-button">Send</button>
</div>
