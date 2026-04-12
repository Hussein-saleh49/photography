<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route("admin.services.index") }}">
                  <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                   Services
                </a>
                <a class="nav-link" href="{{ route("admin.collections.index") }}">
                      <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                   Collections
                </a>
                <a class="nav-link" href="{{ route("admin.blogs.index") }}">
                      <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                   Blogs
                </a>
                <a class="nav-link" href="{{ route("admin.messages.index") }}">
                      <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                   Messages
                </a>
                <a class="nav-link" href="{{ route("admin.subscribers.index") }}">
                      <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                   Subscribers
                </a>
                <a class="nav-link" href="{{ route("admin.settings.index") }}">
                      <div class="sb-nav-link-icon"><i class="fas fa-settings"></i></div>
                   Settings
                </a>
            </div>
        </div>
    </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="index.html">
                <div class="modal-body">
                    <div class="form-floating mb-3 ">
                        <input class="form-control" id="inputSubjectName" placeholder="Subject Name" />
                        <label for="inputSubjectName">Subject Name</label>
                    </div>

                    <div class="form-floating mb-3 ">
                        <input class="form-control" id="inputFullPrice" placeholder="Full Price" />
                        <label for="inputFullPrice">Full Price</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input class="form-control" id="inputHourPrice" placeholder="Hour Price" />
                        <label for="inputHourPrice">Hour Price</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputType" type="text" placeholder="Type" />
                        <label for="inputType">Subject Type</label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>
                        Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
