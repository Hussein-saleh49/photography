<x-custom.update-modal title="Update Service">
    <div class="modal-body">

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" wire:model="title" class="form-control">
            <x-custom.error-message name="title"></x-custom.error-message>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea wire:model="description" class="form-control" rows="3"></textarea>
            <x-custom.error-message name="description"></x-custom.error-message>
        </div>

        <!-- Icon -->
        <div class="mb-3">
            <label class="form-label">Icon (FontAwesome class)</label>
            <input type="text" wire:model="icon" class="form-control" placeholder="fas fa-camera">
            <x-custom.error-message name="icon"></x-custom.error-message>
        </div>

    </div>
</x-custom.update-modal>
