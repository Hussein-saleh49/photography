<x-custom.show-modal title="view Collection">
    <div class="modal-body">

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <p class="form-control-plaintext">{{ $title }}</p>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label fw-bold">Tag</label>
            <p class="form-control-plaintext">{{ $tag }}</p>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Cover Image:</label>

            <div class="mt-2">
                @if ($cover_image)
                    <img src="{{ $cover_image }}" width="150" height="150"
                        style="object-fit: cover; border-radius: 10px;">
                @else
                    <span class="text-muted">No cover</span>
                @endif
            </div>
        </div>

        {{-- Gallery --}}
        <div class="mb-3">
            <label class="fw-bold">Gallery:</label>

            <div class="d-flex flex-wrap gap-2 mt-2">

                @forelse($images as $media)
                    <img src="{{ $media->getUrl() }}" width="100" height="100"
                        style="object-fit: cover; border-radius: 8px;">
                @empty
                    <span class="text-muted">No photos</span>
                @endforelse

            </div>
        </div>

       

    </div>
    </x-custom.showModal>
