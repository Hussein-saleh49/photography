 <section class="ftco-section ftco-bread">
     <div class="container">
         <div class="row no-gutters slider-text justify-content-center align-items-center">
             <div class="col-md-8 ftco-animate">
                 <p class="breadcrumbs"><span class="mr-2"><a href="{{ route("front.index") }}">Home</a></span>
                    {{ $slot }}
                     <span>{{ $title}}</span>
                 </p>
                 <h1 class="bread">{{ $subtitle }}</h1>
             </div>
         </div>
     </div>
 </section>
