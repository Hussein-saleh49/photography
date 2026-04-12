 @extends('front.master')
 @section('contact-activation', 'active')
 @section('title', 'Contact')
 @section('content')

     <x-front.navbar title="Contact" subtitle="Contact"></x-front.navbar>
    @livewire("admin.messages.messages-create")
 @endsection
