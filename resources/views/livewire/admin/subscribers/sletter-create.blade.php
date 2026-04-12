  <div class="sidebar-box subs-wrap img" style="background-image: url({{ asset('assets') }}/images/bg_1.jpg);">
      <div class="overlay"></div>
      <h3 class="mb-4 sidebar-heading">Newsletter</h3>
      <p class="mb-4">Far far away, behind the word mountains, far from the countries
          Vokalia</p>
      <form wire:submit.prevent="submit" class="subscribe-form">
          <div class="form-group">
              <input wire:model="email" type="text" class="form-control" placeholder="Email Address">
              <x-custom.error-message name="email" class="text-danger mt-2 d-block"></x-custom.error-message>
              <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
          </div>
         <x-custom.timeout-alert alert="sletter-alert"></x-custom.timeout-alert>
      </form>
  </div>
