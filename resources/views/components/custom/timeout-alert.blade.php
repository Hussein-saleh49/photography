 <!-- Alert -->
 <div x-data="{ show: false, message: '' }"
     x-on:{{ $alert }}.window="
        show = true; 
        message = $event.detail.message; 
        setTimeout(() => show = false, 2000)"
     x-show="show" x-transition class="alert alert-success mt-2 rounded-pill px-3 py-1" style="display: none;">
     <span x-text="message"></span>
 </div>
