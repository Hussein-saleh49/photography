<div>

    <!-- Table -->
    <table class="table table-hover table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>About_title</th>
                <th>About_description</th>
                <th>Phone</th>
                <th>Social</th>
                <th width="150">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($settings as $setting)
                <tr>
                    <td class="fw-bold">{{ $setting->name }}</td>

                    <td>{{ $setting->address }}</td>
                    <td>{{ $setting->email }}</td>
                    <td>{{ $setting->about_title }}</td>
                    <td>{{ $setting->about_description }}</td>
                    <td>{{ $setting->phone }}</td>

                    <!-- Social Icons -->
                    <td>
                        <div class="d-flex justify-content-center gap-3">

                            @if ($setting->facebook)
                                <a href="{{ $setting->facebook }}" target="_blank" class="text-primary">
                                    <i class="fab fa-facebook fa-lg"></i>
                                </a>
                            @endif

                            @if ($setting->instagram)
                                <a href="{{ $setting->instagram }}" target="_blank" class="text-danger">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                            @endif

                            @if ($setting->tiktok)
                                <a href="{{ $setting->tiktok }}" target="_blank" class="text-dark">
                                    <i class="fab fa-tiktok fa-lg"></i>
                                </a>
                            @endif

                        </div>
                    </td>

                    <!-- Actions -->
                    <td>
                        <button wire:click="$dispatch('settingUpdate', { id: {{ $setting->id }} })"
                            class="btn btn-sm btn-warning text-white">
                            <i class="fas fa-edit"></i>
                        </button>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">
                        <i class="fas fa-cog fa-2x mb-2"></i><br>
                        No settings yet!
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $settings->links() }}
    </div>

</div>
