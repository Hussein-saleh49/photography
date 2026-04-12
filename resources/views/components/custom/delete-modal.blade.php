<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-danger">{{ $name }}</h5>
            </div>
            {{ $slot }}
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <x-custom.loading-attr-click name="Delete"></x-custom.loading-attr-click>
            </div>

        </div>
    </div>
</div>
