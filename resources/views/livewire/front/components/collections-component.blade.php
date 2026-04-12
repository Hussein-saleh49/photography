<div class="row">

    @forelse ($collections as $collection)
        <div class="col-md-4 ftco-animate">

            <a href="{{ route('front.collection-details', $collection->id) }}"
                class="photography-entry img d-flex justify-content-start align-items-end"
                style="background-image: url('{{ $collection->getFirstMediaUrl('cover') }}');">

                <div class="text ml-4 mb-4">
                    <h3>{{ $collection->title }}</h3>
                    <span class="tag">{{ $collection->tag }}</span>
                </div>

            </a>

        </div>

    @empty
        <p>No collections found</p>
    @endforelse

</div>
