<div>
    <div class="d-flex justify-content-between mb-3">

        <!-- Search -->
        <input type="text" wire:model.live="search" class="form-control w-25 mb-3" placeholder="Search...">


        @livewire('admin.blogs.blogs-create')
    </div>


    <!-- Table -->
    <table class="table table-hover table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th width="200">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($blogs as $blog)
                <tr>

                    {{-- Title --}}
                    <td class="fw-bold">{{ $blog->name }}</td>
                    <td>
                        {{ $blog->description }}
                    </td>

                    {{-- Cover + photos count --}}
                    <td>
                        <img src="{{ $blog->getFirstMediaUrl('image') }}" width="70" height="70"
                            style="object-fit: cover; border-radius: 8px;"> 
                    </td>

                    {{-- Actions --}}
                    <td>
                        <div class="d-flex justify-content-center gap-2">

                            <button wire:click="$dispatch('blogShow', { id: {{ $blog->id }} })"
                                class="btn btn-sm btn-info text-white"><i class="fas fa-eye"></i></button>
                            <button wire:click="$dispatch('blogUpdate', { id: {{ $blog->id }} })"
                                class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></button>
                            <button wire:click="$dispatch('blogDelete', { id: {{ $blog->id }} })"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">
                        No blogs Yet !
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $blogs->links() }}
    </div>

</div>
