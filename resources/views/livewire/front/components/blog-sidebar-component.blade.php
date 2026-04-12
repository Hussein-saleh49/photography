<div class="col-lg-4 sidebar ftco-animate bg-light">



    {{-- 🟢 Categories --}}
    <div class="sidebar-box">
        <h3 class="sidebar-heading">Categories</h3>

        <ul class="categories">
            @foreach ($categories as $cat)
                <li>
                    <a href="javascript:void(0)">
                        {{ $cat->name }}
                        <span>({{ $cat->blogs->count() }})</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- 🔥 Popular Articles --}}
    <div class="sidebar-box">
        <h3 class="sidebar-heading">Popular Articles</h3>

        @foreach ($popularBlogs as $blog)
            <div class="block-21 mb-4 d-flex">

                <a class="blog-img mr-4" style="background-image: url('{{ $blog->getFirstMediaUrl('image') }}');">
                </a>

                <div class="text">

                    <h3 class="heading">
                        <a href="{{ route('front.blog-details', $blog) }}">
                            {{ $blog->name }}
                        </a>
                    </h3>

                    <div class="meta">
                        <div>
                            <span class="icon-calendar"></span>
                            {{ $blog->created_at->format('M d, Y') }}
                        </div>
                    </div>

                </div>

            </div>
        @endforeach
    </div>

    {{-- 📅 Archives --}}
    <div class="sidebar-box">
        <h3 class="sidebar-heading">Archives</h3>

        <ul class="categories">

            @forelse($archives as $archive)
                <li>
                    <a href="javascript:void(0)">
                        {{ \Carbon\Carbon::create($archive->year, $archive->month)->format('F Y') }}
                        <span>({{ $archive->total }})</span>
                    </a>
                </li>

            @empty
                <li>No archives found</li>
            @endforelse

        </ul>
    </div>

    {{-- 📩 Newsletter --}}
    @livewire('admin.subscribers.sletter-create')

</div>
