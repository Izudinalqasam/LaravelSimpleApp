<div class="form-group mb-2">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') ?? $post->title }}">
    @error('title')
        <div class="text-danger mt-2">
            {{ $message ?? 'Tolong diisi formnya guys' }}
        </div>
    @enderror
</div>
<div class="forum-group mb-2">
    <label for="body">Description</label>
    <textarea name="body" id="body" class="form-control">{{ old('body') ?? $post->body }}</textarea>
    @error('body')
        <div class="text-danger mt-2">
            {{ $message ?? 'Tolong diisi formnya guys' }}
        </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update'}}</button>
