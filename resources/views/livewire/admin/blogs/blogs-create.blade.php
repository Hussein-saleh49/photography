<div>


    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
        + Add Blog
    </button>


    <x-custom.create-modal title="Create Blog">
        <div class="modal-body">

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" wire:model="name" class="form-control">
                <x-custom.error-message name="name"></x-custom.error-message>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea wire:model="description" class="form-control" rows="3"></textarea>
                <x-custom.error-message name="description"></x-custom.error-message>
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" wire:model="image" class="form-control">
                <x-custom.error-message name="image"></x-custom.error-message>

                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" width="100" class="mt-2">
                @endif
            </div>
            {{-- Category --}}
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select wire:model="category_id" class="form-select custom-select">
                    <option selected disabled>Select Category</option>
                    @forelse ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @empty
                        <option>No Options Here</option>
                    @endforelse

                </select>
                <x-custom.error-message name="category_id"></x-custom.error-message>
            </div>

        </div>
    </x-custom.create-modal>

</div>
