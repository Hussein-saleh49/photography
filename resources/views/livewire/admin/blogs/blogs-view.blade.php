 <x-custom.show-modal title="Show Blog">
     <div class="modal-body">

         <!-- Name -->
         <div class="mb-3">
             <label class="form-label">Name</label>
            <p class="form-control-plaintext">{{ $name }}</p>
         </div>

         <!-- Description -->
         <div class="mb-3">
             <label class="form-label">Description</label>
             <p class="form-control-plaintext">{{ $description }}</p>
         </div>
         {{-- Category --}}
         <div class="mb-3">
             <label class="form-label">Category</label>
             <p class="form-control-plaintext">{{ $category}}</p>
         </div>

         <div class="mb-3">
             <label class="form-label">Image</label>
             @if ($image)
                 <img src="{{ $image }}" width="100" class="mt-2">
             @endif
         </div>
        
     </div>
 </x-custom.show-modal>
