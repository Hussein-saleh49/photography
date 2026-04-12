@extends('admin.master')
@section('title', 'Messages')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">All Messages</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">My Messages</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header bg-light-green">
                    <i class="fas fa-table me-1"></i>
                    Messages
                </div>

                <div class="card-body">
                    
                    @livewire('admin.messages.messages-data')

                    @livewire('admin.messages.messages-delete')

                    @livewire('admin.messages.messages-view')

                    
                </div>
            </div>
        </div>
    </main>
@endsection
