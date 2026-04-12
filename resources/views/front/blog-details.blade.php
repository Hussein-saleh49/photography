@extends('front.master')
 @section("blog-activation","active")
@section("title","Blog-Details")
@section('content')
  <x-front.navbar title="single" subtitle="Single Blog">
    <span class="mr-2"><a href="{{ route("front.blog") }}">Blog</a></span>
    </x-front.navbar>
        <section class="ftco-section">
            <div class="container">
               <livewire:front.components.blog-details-component :id="$id" />
            </div>
        </section>
@endsection
