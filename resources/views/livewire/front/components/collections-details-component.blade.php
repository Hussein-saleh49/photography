<div class="container">

    <h2 class="mb-4">{{ $collection->title }}</h2>
    <span class="text-muted">{{ $collection->tag }}</span>

    <div class="row mt-4">

        @foreach ($collection->getMedia('photos') as $photo)
            <div class="col-md-4 ftco-animate mb-4">

                <a href="{{ $photo->getUrl() }}" class="photography-entry img image-popup"
                    style="background-image: url('{{ $photo->getUrl() }}');">

                    <div class="overlay"></div>

                </a>

            </div>
        @endforeach

    </div>

</div>
