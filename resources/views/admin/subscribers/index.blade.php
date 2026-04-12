@extends('admin.master')
@section('title', 'Subscribers')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">All Subscribers</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">My Subscribers</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header bg-light-green">
                    <i class="fas fa-table me-1"></i>
                    Subscribers
                </div>

                <div class="card-body">

                    @livewire('admin.subscribers.subscribers-delete')

                    @livewire('admin.subscribers.subscribers-data')


                </div>
            </div>
        </div>
    </main>
@endsection
