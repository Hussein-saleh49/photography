<div>
    <div class="d-flex justify-content-between mb-3">

        <!-- Search -->
        <input type="text" wire:model.live="search" class="form-control w-25 mb-3" placeholder="Search...">

    </div>


    <!-- Table -->
    <table class="table table-hover table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Email</th>
                <th width="200">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($subscribers as $subscriber)
                <tr>

                    <td class="fw-bold">{{ $loop->iteration }}</td>
                    <td class="fw-bold">{{ $subscriber->email }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">

                            <button wire:click="$dispatch('subscriberDelete', { id: {{ $subscriber->id }} })"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center text-muted py-4">
                        No subscribers Yet !
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $subscribers->links() }}
    </div>

</div>
