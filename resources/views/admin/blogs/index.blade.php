@extends('admin.master')
@section('title', 'Blog')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">My Blog</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">My Blog</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header bg-light-green">
                    <i class="fas fa-table me-1"></i>
                    My Blog
                </div>

                <div class="card-body">

                    @livewire('admin.blogs.blogs-data')

                    @livewire('admin.blogs.blogs-update')

                    @livewire('admin.blogs.blogs-delete')

                    @livewire('admin.blogs.blogs-view')

                </div>
            </div>
        </div>
    </main>
@endsection
