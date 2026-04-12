<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form wire:submit.prevent="submit">
                @csrf

               {{ $slot }}

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <x-custom.loading-attr name="Update"></x-custom.loading-attr>
                </div>

            </form>

        </div>
    </div>
</div>