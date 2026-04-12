<x-custom.delete-modal name="Delete Blog">

    <div class="modal-body text-center">

        <p class="mb-3">
            Are you sure you want to delete:
        </p>

        <h5 class="text-danger fw-bold">
            {{ $name }}
        </h5>

        <p class="text-muted">
            This action cannot be undone.
        </p>

    </div>

   

</x-custom.delete-modal>