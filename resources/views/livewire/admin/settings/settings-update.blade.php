<x-custom.update-modal title="Update Settings">
    <div class="modal-body">

        <!-- Name -->
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" wire:model="name" class="form-control" placeholder="Site name">
            <x-custom.error-message name="name" />
        </div>

        <!-- Address -->
        <div class="mb-3">
            <label class="form-label fw-bold">Address</label>
            <input type="text" wire:model="address" class="form-control" placeholder=" Add address Here">
            <x-custom.error-message name="address" />
        </div>
        <!-- Email -->
        <div class="mb-3">
            <label class="form-label fw-bold">Email</label>
            <input type="email" wire:model="email" class="form-control" placeholder=" Add email Here">
            <x-custom.error-message name="email" />
        </div>
        <!-- About_title -->
        <div class="mb-3">
            <label class="form-label fw-bold">About_title</label>
            <input type="text" wire:model="about_title" class="form-control" placeholder=" Add about_title  Here">
            <x-custom.error-message name="about_title" />
        </div>
        <!-- About Description -->
        <div class="mb-3">
            <label class="form-label fw-bold">About Description</label>

            <textarea wire:model="about_description" class="form-control" rows="4" placeholder="Add about description here">
    </textarea>

            <x-custom.error-message name="about_description" />
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label class="form-label fw-bold">Phone</label>
            <input type="text" wire:model="phone" class="form-control" placeholder="+20...">
            <x-custom.error-message name="phone" />
        </div>

        <hr>

        <!-- Social Links -->
        <h6 class="mb-3 text-muted">Social Links</h6>

        <!-- Facebook -->
        <div class="mb-3">
            <label class="form-label">
                <i class="fab fa-facebook text-primary me-1"></i> Facebook
            </label>
            <input type="url" wire:model="facebook" class="form-control" placeholder="https://facebook.com/...">
            <x-custom.error-message name="facebook" />
        </div>

        <!-- Instagram -->
        <div class="mb-3">
            <label class="form-label">
                <i class="fab fa-instagram text-danger me-1"></i> Instagram
            </label>
            <input type="url" wire:model.defer="instagram" class="form-control"
                placeholder="https://instagram.com/...">
            <x-custom.error-message name="instagram" />
        </div>

        <!-- TikTok -->
        <div class="mb-3">
            <label class="form-label">
                <i class="fab fa-tiktok me-1"></i> TikTok
            </label>
            <input type="url" wire:model.defer="tiktok" class="form-control" placeholder="https://tiktok.com/...">
            <x-custom.error-message name="tiktok" />
        </div>

    </div>
</x-custom.update-modal>
