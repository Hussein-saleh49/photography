<div>


    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
        + Add Collection
    </button>


    <x-custom.create-modal title="Create Collection">
        <div class="modal-body">

            <!-- Title -->
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" wire:model="title" class="form-control">
                <x-custom.error-message name="title"></x-custom.error-message>
            </div>

            <!-- Tag -->
            <div class="mb-3">
                <label class="form-label">Tag</label>
                <input type="text" wire:model="tag" class="form-control" placeholder="e.g. wedding, nature">
                <x-custom.error-message name="tag"></x-custom.error-message>
            </div>

            <!-- Cover Image -->
            <div class="mb-3">
                <label class="form-label">Cover Image</label>
                <input type="file" wire:model="cover_image" class="form-control">
                <x-custom.error-message name="cover_image"></x-custom.error-message>

                @if ($cover_image)
                    <img src="{{ $cover_image->temporaryUrl() }}" class="mt-2" width="120">
                @endif

            </div>

            <!-- Multiple Photos -->
            <div class="mb-3">
                <label class="form-label">Photos</label>
                <input type="file" wire:model="images" class="form-control" multiple>
                <x-custom.error-message name="images.*"></x-custom.error-message>

                @if ($images)

                    <div class="d-flex gap-2 flex-wrap mt-2">
                        @foreach ($images as $img)
                            <img src="{{ $img->temporaryUrl() }}" width="80" height="80"
                                style="object-fit: cover;">
                        @endforeach
                    </div>
                @endif



            </div>

        </div>
    </x-custom.create-modal>

</div>
