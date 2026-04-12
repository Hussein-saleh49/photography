  <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
      <h1 id="colorlib-logo"><a href="{{ route("front.index") }}"><span class="img"
                  style="background-image: url({{ asset('assets') }}/images/author.jpg);"></span>Louie Smith</a>
      </h1>
      <nav id="colorlib-main-menu" role="navigation">
          <ul>
              <li class="colorlib-@yield("home-activation")"><a href="{{ route("front.index") }}">Home</a></li>
              <li class="colorlib-@yield("collection-activation")"><a href="{{ route("front.collection") }}">Collection</a></li>
              <li class="colorlib-@yield("about-activation")"><a href="{{ route("front.about") }}">About Me</a></li>
              <li class="colorlib-@yield("services-activation")"><a href="{{ route("front.services") }}">My Services</a></li>
              <li class="colorlib-@yield("blog-activation")"><a href="{{ route("front.blog") }}">Blog</a></li>
              <li class="colorlib-@yield("contact-activation")"><a href="{{ route("front.contact") }}">Contact</a></li>
          </ul>
      </nav>

   @livewire("admin.subscribers.subscribers-create")
  </aside> <!-- END COLORLIB-ASIDE -->
