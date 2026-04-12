<x-custom.update-modal title="Update Collection">

    <div class="modal-body">

        {{-- Title --}}
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" wire:model="title" class="form-control">
            <x-custom.error-message name="title" />
        </div>

        {{-- Tag --}}
        <div class="mb-3">
            <label class="form-label">Tag</label>
            <input type="text" wire:model="tag" class="form-control">
            <x-custom.error-message name="tag" />
        </div>

        {{-- Current Cover --}}
        <div class="mb-3">
            <label class="form-label">Current Cover</label>

            @if($cover)
                <div>
                    <img src="{{ $cover }}"
                         width="120"
                         height="120"
                         style="object-fit: cover; border-radius: 8px;">
                </div>
            @else
                <span class="text-muted">No cover image</span>
            @endif
        </div>

        {{-- Change Cover --}}
        <div class="mb-3">
            <label class="form-label">Change Cover</label>
            <input type="file" wire:model="cover_image" class="form-control">

            <x-custom.error-message name="cover_image" />

            @if($cover_image)
                <div class="mt-2">
                    <img src="{{ $cover_image->temporaryUrl() }}"
                         width="120"
                         height="120"
                         style="object-fit: cover; border-radius: 8px;">
                </div>
            @endif
        </div>

        {{-- Current Gallery --}}
        <div class="mb-3">
            <label class="form-label">Current Photos</label>

            <div class="d-flex flex-wrap gap-2">
                @forelse($photos as $photo)
                    <img src="{{ $photo->getUrl() }}"
                         width="80"
                         height="80"
                         style="object-fit: cover; border-radius: 6px;">
                @empty
                    <span class="text-muted">No images</span>
                @endforelse
            </div>
        </div>

        {{-- Add New Photos --}}
        <div class="mb-3">
            <label class="form-label">Add New Photos</label>
            <input type="file" wire:model="images" multiple class="form-control">

            <x-custom.error-message name="images.*" />

            @if($images)
                <div class="d-flex flex-wrap gap-2 mt-2">
                    @foreach($images as $img)
                        <img src="{{ $img->temporaryUrl() }}"
                             width="80"
                             height="80"
                             style="object-fit: cover; border-radius: 6px;">
                    @endforeach
                </div>
            @endif
        </div>

    </div>

</x-custom.update-modal>