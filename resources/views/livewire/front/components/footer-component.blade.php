 <footer class="ftco-footer ftco-bg-dark ftco-section">
     <div class="container px-md-5">
         <div class="row mb-5">
             <div class="col-md">
                 <div class="ftco-footer-widget mb-4 ml-md-4">
                     <h2 class="ftco-heading-2">Recent Photos</h2>
                     <ul class="list-unstyled photo">
                         @foreach ($recent_photos as $photo)
                             <li class="m-1">
                                 <a href="{{ $photo->getUrl() }}" class="img"
                                     style="background-image: url('{{ $photo->getUrl() }}');
                  width:70px;height:70px;display:block;">
                                 </a>
                             </li>
                         @endforeach
                     </ul>
                 </div>
             </div>
             <div class="col-md">
                 <div class="ftco-footer-widget mb-4">

                     <h2 class="ftco-heading-2">Archives</h2>

                     <ul class="list-unstyled categories">

                         @forelse($archives as $archive)
                             <li>
                                 <a href="#">
                                     {{ \Carbon\Carbon::create($archive->year, $archive->month)->format('F Y') }}
                                     <span>({{ $archive->total }})</span>
                                 </a>
                             </li>

                         @empty
                             <li>No archives</li>
                         @endforelse

                     </ul>

                 </div>
             </div>
             <div class="col-md">
                 <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Have a Questions?</h2>
                     <div class="block-23 mb-3">
                         <ul>
                             <li><span class="icon icon-map-marker"></span><span class="text">
                                     {{ $settings->address }}</span></li>
                             <li><a href="{{ $settings->phone }}"><span class="icon icon-phone"></span><span
                                         class="text">{{ $settings->phone }}</span></a></li>
                             <li><a href="{{ $settings->email }}"><span class="icon icon-envelope"></span><span
                                         class="text">{{ $settings->email ?? '' }}</span></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </footer>
