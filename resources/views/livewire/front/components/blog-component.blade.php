<div class="row">
    @forelse ($blogs as $blog)
        <div class="col-md-12">
            <div class="blog-entry ftco-animate d-md-flex">
                <a href="single.html" class="img img-2"
                    style="background-image: url('{{ $blog->getFirstMediaUrl('image') }}');"></a>
                <div class="text text-2 p-4">
                    <h3 class="mb-2"><a href="{{ route("front.blog-details",$blog) }}">{{ $blog->name }}</a></h3>
                    <div class="meta-wrap">
                        <p class="meta">
                            <span>{{ $blog->created_at->format("d M Y") }}</span>
                            <span>{{ $blog->Category->name }}</span>
                            
                        </p>
                    </div>
                    <p class="mb-4">{{ $blog->description }}</p>
                    <p><a href="{{ route("front.blog-details",$blog) }}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                    </p>
                </div>
            </div>
        </div>
    @empty
    @endforelse

</div><!-- END-->
