 @extends('front.master')
 @section('services-activation', 'active')
 @section('title', 'Services')
 @section('content')
     <x-front.navbar title="services" subtitle="My Services"></x-front.navbar>
     <section class="ftco-section">
         <div class="container">
            
                 @livewire('front.components.services-component')
            
     </section>
 @endsection
