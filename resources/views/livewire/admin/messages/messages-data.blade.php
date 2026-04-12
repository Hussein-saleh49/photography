<div>
    <div class="d-flex justify-content-between mb-3">

        <!-- Search -->
        <input type="text" wire:model.live="search" class="form-control w-25 mb-3" placeholder="Search...">

    </div>


    <!-- Table -->
    <table class="table table-hover table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th width="200">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($messages as $message)
                <tr>
                    <td class="fw-bold">{{ $message->name }}</td>
                    <td class="fw-bold">{{ $message->email }}</td>
                    <td>
                        {{ $message->subject }}
                    </td>
                    <td>
                        {{ Str::limit($message->message, 50) }}
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <button wire:click="$dispatch('messageShow', { id: {{ $message->id }} })"
                                class="btn btn-sm btn-info text-white"><i class="fas fa-eye"></i></button>

                            <button wire:click="$dispatch('messageDelete', { id: {{ $message->id }} })"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">
                        No messages Yet !
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $messages->links() }}
    </div>

</div>
