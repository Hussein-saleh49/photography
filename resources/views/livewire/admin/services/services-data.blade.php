<div>
    <div class="d-flex justify-content-between mb-3">

        <!-- Search -->
        <input type="text" wire:model.live="search" class="form-control w-25 mb-3" placeholder="Search...">


        @livewire('admin.services.services-create')
    </div>


    <!-- Table -->
    <table class="table table-hover table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Icon</th>
                <th width="200">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($services as $service)
                <tr>
                    <td class="fw-bold">{{ $service->title }}</td>
                    <td class="text-muted">{{ \Illuminate\Support\Str::limit($service->description, 50) }}</td>
                    <td>
                        <span class="{{ $service->icon }}" style="font-size: 24px;"></span>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <button wire:click="$dispatch('serviceShow', { id: {{ $service->id }} })"
                                class="btn btn-sm btn-info text-white"><i class="fas fa-eye"></i></button>
                            <button wire:click="$dispatch('serviceUpdate', { id: {{ $service->id }} })"
                                class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></button>
                            <button wire:click="$dispatch('serviceDelete', { id: {{ $service->id }} })"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">
                        No Services Yet !
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $services->links() }}
    </div>

</div>
