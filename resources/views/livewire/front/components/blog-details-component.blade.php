<div class="row">

    <div class="col-lg-8 ftco-animate">

        {{-- 🟢 Title --}}
        <h2 class="mb-3 font-weight-bold">
            {{ $blog->name }}
        </h2>

        {{-- 🟢 Category --}}
        @if ($blog->category->name)
            <p class="text-muted">
                Category: {{ $blog->category->name }}
            </p>
        @endif

        {{-- 🟢 Description --}}
        <p>
            {{ $blog->description }}
        </p>

        {{-- 🟢 Main Image --}}
        <p>
            <img src="{{ $blog->getFirstMediaUrl('image') }}" alt="{{ $blog->name }}" class="img-fluid">
        </p>

        {{-- 🟢 Author --}}
        <div class="about-author d-flex p-4 bg-light">

            <div class="bio mr-5">
                <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Author" class="img-fluid mb-4">
            </div>

            <div class="desc">
                <h3>Admin</h3>
                <p>
                    Passionate photographer sharing stories and moments through images.
                </p>
            </div>

        </div>

        <div class="mt-5">
            <h5>Share this post</h5>

            <a href="#">Facebook</a> |
            <a href="#">Twitter</a> |
            <a href="#">WhatsApp</a>
        </div>

    </div>

    @livewire('front.components.blog-sidebar-component')

</div>
