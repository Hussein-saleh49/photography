<button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
    <span wire:loading.remove wire:target="submit">{{ $name }}</span>
    <span wire:loading wire:target="submit">
        <i class="fas fa-spinner fa-spin"></i> Loading...
    </span>
</button>
