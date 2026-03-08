<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <!-- Options -->
                <div class="sb-sidenav-menu-heading">Options</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-solid fa-users"></i></div>
                    Students
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="students.html">All students</a>
                        <a class="nav-link" href="students-new.html">New students</a>
                        <a class="nav-link" href="students-current.html">Current students</a>
                    </nav>
                </div>
                <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Reservations
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="employees.html">All Resevations</a>
                                    <a class="nav-link" href="department.html">New Reservations</a>
                                    <a class="nav-link" href="contract.html">Current Reservations</a>
                                </nav>
                            </div> -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages2"
                    aria-expanded="false" aria-controls="collapsePages2">
                    <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    My Subjects
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages2" aria-labelledby="headingThree"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="course.html">Intro. To Computer Science</a>
                        <a class="nav-link" href="course.html">Logic Programming</a>
                        <a class="nav-link" href="course.html">Computer Network</a>
                        <a href="#" class="nav-link" title="Send Session Link" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class="fa fa-plus me-2"></i>
                            Add Subject
                        </a>
                    </nav>
                </div>

                <!--end Options -->
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Teacher name
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
