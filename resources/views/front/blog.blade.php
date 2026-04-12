@extends('front.master')
@section('blog-activation', 'active')
@section('title', 'Blog')
@section('content')
    <x-front.navbar title="blog" subtitle="Read Our Blog"></x-front-navbar>

        <section class="ftco-section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-8">
                        @livewire("front.components.blog-component")
                       
                    </div>
                  @livewire("front.components.blog-sidebar-component")
                </div>
            </div>
        </section>
    @endsection
