  @extends('admin.master')
  @section("title","Dashboard")
  @section('content')
      <main>
      @livewire("admin.dashboard.dashboard-data")
      </main>
  @endsection
