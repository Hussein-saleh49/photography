
 <button wire:loading.attr="disabled" type="button" class="btn btn-danger" wire:click="submit">
     <span wire:loading.remove wire:target="submit"> {{ $name }}</span>
     <span wire:loading wire:target="submit">
         <i class="fas fa-spinner fa-spin"></i> Loading...
     </span>
 </button>
