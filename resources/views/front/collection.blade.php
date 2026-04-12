  @extends('front.master')
  @section('collection-activation', 'active')
  @section('title', 'Collection')
  @section('content')

      <x-front.navbar title="Collection" subtitle="My Collections"></x-front.navbar>
          <section class="ftco-section-3">
              <div class="photograhy">
                  @livewire("front.components.collections-component")
              </div>
          </section>
      @endsection
