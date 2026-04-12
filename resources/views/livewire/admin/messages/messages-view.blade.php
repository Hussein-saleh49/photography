<x-custom.show-modal title="view Message">
    <div class="modal-body">

        <!-- Name -->
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <p class="form-control-plaintext">{{ $name }}</p>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label fw-bold">Email</label>
            <p class="form-control-plaintext">{{ $email }}</p>
        </div>

        <!-- Subject -->
        <div class="mb-3">
            <label class="form-label fw-bold">Subject</label>
            <p class="form-control-plaintext">{{ $subject }}</p>
        </div>

        <!-- Message -->
        <div class="mb-3">
            <label class="form-label fw-bold">Message</label>
            <p class="border rounded p-3 bg-light">
                {{ $messageText }}
            </p>
        </div>

    </div>
</x-custom.show-modal>
