  @extends('front.master')
  @section('collection-activation', 'active')
  @section('title', 'Collection-details')
  @section('content')

      <x-front.navbar title="Collection" subtitle="My Collection"></x-front.navbar>
          <section class="ftco-section-3">
              <div class="photograhy">
                  <livewire:front.components.collections-details-component :id="$id" />
              </div>
          </section>
      @endsection
