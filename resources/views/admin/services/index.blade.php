@extends('admin.master')
@section('title', 'Services')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">All Services</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">My Services</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header bg-light-green">
                    <i class="fas fa-table me-1"></i>
                    Services
                </div>

                <div class="card-body">

                    @livewire('admin.services.services-data')

                    @livewire('admin.services.services-update')
                    
                    @livewire('admin.services.services-delete')

                    @livewire('admin.services.services-view')
                </div>
            </div>
        </div>
    </main>
@endsection

