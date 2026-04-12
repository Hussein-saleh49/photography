<div class="colorlib-footer">
    <h3 class="text-dark mb-3">Newsletter</h3>

    <form wire:submit.prevent="submit" class="mx-auto" style="max-width: 320px;">

        <div class="input-group input-group-sm">

            <input type="email" wire:model="email" class="form-control rounded-pill me-1" placeholder="Enter Email">
            <button class="btn btn-primary rounded-pill px-3" type="submit">
                <i class="bi bi-send"></i>
            </button>
        </div>

        <x-custom.error-message name="email" class="text-danger mt-2 d-block"></x-custom.error-message>
        <x-custom.timeout-alert alert="subscribe-alert"></x-custom.timeout-alert>
    </form>
</div>
