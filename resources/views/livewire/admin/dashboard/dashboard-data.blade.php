    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">{{ Auth::guard('admin')->user()->name }} Dashboard</li>
        </ol>
        <!-- cards -->
        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card bg-lighter-green text-white mb-4">
                    <div class="card-body">Blogs</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-white text-center py-2 display-4 fw-bolder">
                            {{ $blogsCount }}
                        </p>
                        <div class="small text-white">
                            <i class="fas fa-blog fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-light-green text-white mb-4">
                    <div class="card-body">Collections</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-white text-center py-2 display-4 fw-bolder">
                            {{ $collectionsCount }}
                        </p>
                        <div class="small text-white">
                            <i class="fas fa-images fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark-green text-white mb-4">
                    <div class="card-body">Messages</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-white text-center py-2 display-4 fw-bolder">
                            {{ $messagesCount }}
                        </p>
                        <div class="small text-white">
                            <i class="fas fa-envelope fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-darker-green text-white mb-4">
                    <div class="card-body">Subscribers</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-white text-center py-2 display-4 fw-bolder">
                            {{ $subscribersCount }}
                        </p>
                        <div class="small text-white">
                            <i class="fas fa-user fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- cards -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header bg-light-green">
                        <i class="fas fa-chart-area me-1"></i>
                        Students teached per month
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header bg-light-green">
                        <i class="fas fa-chart-bar me-1"></i>
                        New Students
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
