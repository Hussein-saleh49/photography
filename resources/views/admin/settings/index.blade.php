@extends('admin.master')
@section('title', 'Settings')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">All Settings</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">My Settings</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header bg-light-green">
                    <i class="fas fa-table me-1"></i>
                    Settings
                </div>

                <div class="card-body">

                    @livewire('admin.settings.settings-data')

                    @livewire('admin.settings.settings-update')

                    
                    
                
                </div>
            </div>
        </div>
    </main>
@endsection

