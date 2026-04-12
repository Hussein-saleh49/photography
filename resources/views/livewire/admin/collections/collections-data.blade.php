<div>
    <div class="d-flex justify-content-between mb-3">

        <!-- Search -->
        <input type="text" wire:model.live="search" class="form-control w-25 mb-3" placeholder="Search...">


        @livewire('admin.collections.collections-create')
    </div>


    <!-- Table -->
    <table class="table table-hover table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Tag</th>
                <th width="200">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($collections as $collection)
                <tr>

                    {{-- Title --}}
                    <td class="fw-bold">{{ $collection->title }}</td>

                    {{-- Cover + photos count --}}
                    <td>
                        <img src="{{ $collection->getFirstMediaUrl('cover') }}" width="70" height="70"
                            style="object-fit: cover; border-radius: 8px;">

                        <span class="badge bg-info">
                            {{ $collection->getMedia('photos')->count() }}
                        </span>
                    </td>

                    {{-- Tag --}}
                    <td>
                        <span class="badge bg-primary">
                            {{ $collection->tag }}
                        </span>
                    </td>

                    {{-- Actions --}}
                    <td>
                        <div class="d-flex justify-content-center gap-2">

                         <button wire:click="$dispatch('collectionShow', { id: {{ $collection->id }} })"
                                class="btn btn-sm btn-info text-white"><i class="fas fa-eye"></i></button>
                            <button wire:click="$dispatch('collectionUpdate', { id: {{ $collection->id }} })"
                                class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></button>
                            <button wire:click="$dispatch('collectionDelete', { id: {{ $collection->id }} })"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">
                        No Collections Yet !
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $collections->links() }}
    </div>

</div>
