 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
     <!-- Navbar Brand-->
     <a class="navbar-brand ps-3 logo" href="index.html">
         <img src="{{ asset("assets-admin") }}/images/logo.png" alt="" class="img-fluid">
     </a>
     <!-- Sidebar Toggle-->
     <button class="btn btn-link btn-lg order-1 order-lg-0 me-4 me-lg-0 toggle-lg" id="sidebarToggle" href="#!"><i
             class="fas fa-bars"></i></button>
     <!-- Navbar Search-->
     <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
         <div class="input-group">
             <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                 aria-describedby="btnNavbarSearch" />
             <button class="btn btn-transparent-green" id="btnNavbarSearch" type="button"><i
                     class="fas fa-search"></i></button>
         </div>
     </form>
     <!-- Navbar-->
     <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                 data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::guard('admin')->user()->name??"" }} <i class="fas fa-user fa-fw"></i></a>
             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                 <li><a class="dropdown-item" href="profile.html"><i class="fa fa-user-tie"></i> Profile</a></li>
                 <li>
                     <hr class="dropdown-divider" />
                 </li>
                @livewire("admin.auth.logout-component")
             </ul>
         </li>
     </ul>
 </nav>
