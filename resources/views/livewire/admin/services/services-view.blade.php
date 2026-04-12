<x-custom.show-modal title="view Service">
    <div class="modal-body">

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <p class="form-control-plaintext">{{ $title }}</p>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <p class="form-control-plaintext">{{ $description }}</p>
        </div>

        <!-- Icon -->
        <div class="mb-3">
            <label class="form-label fw-bold">Icon</label>
            <i class="{{ $icon }} fa-lg"></i>
        </div>

    </div>
    </x-custom.show-modal>
