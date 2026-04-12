@extends('admin.master')
@section('title', 'Collections')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">My Collection</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">My Collection</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header bg-light-green">
                    <i class="fas fa-table me-1"></i>
                    My Collection
                </div>

                <div class="card-body">

                    @livewire('admin.collections.collections-data')

                    @livewire('admin.collections.collections-update')

                    @livewire('admin.collections.collections-delete')

                    @livewire('admin.collections.collections-view')
                </div>
            </div>
        </div>
    </main>
@endsection
