    <div class="row">

        @forelse ($services as $service)
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block">
                    <div class="d-flex justify-content-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="{{ $service->icon }}"></span>
                        </div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            </div>
        @empty
        No services yet!
        @endforelse

    </div>
