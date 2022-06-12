<div class="card">
    <div class="card-header">
        New Post
    </div>
    <div class="card-body">
        <form wire:submit.prevent="save">
            <div class="form-outline mb-4">
                <input wire:model="title" type="text" id="title" class="form-control" />
                <label class="form-label" for="title">Title</label>
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="form-label" for="photo">Photo</label>
                <input wire:model="photo" type="file" class="form-control" id="photo" />
                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-outline mb-4">
                <textarea wire:model="text" class="form-control" id="text" rows="4"></textarea>
                <label class="form-label" for="text">Content</label>
                @error('text') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
        </form>
    </div>
</div>
