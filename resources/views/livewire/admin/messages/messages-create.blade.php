<div>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h3 font-weight-bold">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-light p-4">
                        <p><span>Address:</span> {{ $settings->address }}</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-light p-4">
                        <p><span>Phone:</span> <a href="{{ $settings->phone }}">{{ $settings->phone }}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-light p-4">
                        <p><span>Email:</span> <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-light p-4">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
            
            <div class="row block-9">
                <x-custom.timeout-alert alert="contact-alert"></x-custom.timeout-alert>
                <div class="col-md-12 d-flex">

                    <form wire:submit.prevent="submit" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" wire:model="name" class="form-control" placeholder="Your Name">
                            <x-custom.error-message name="name"></x-custom.error-message>
                        </div>
                        <div class="form-group">
                            <input type="email" wire:model="email" class="form-control" placeholder="Your Email">
                            <x-custom.error-message name="email"></x-custom.error-message>
                        </div>
                        <div class="form-group">
                            <input type="text" wire:model="subject" class="form-control" placeholder="Subject">
                            <x-custom.error-message name="subject"></x-custom.error-message>
                        </div>
                        <div class="form-group">
                            <textarea wire:model="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            <x-custom.error-message name="message"></x-custom.error-message>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>
</div>
