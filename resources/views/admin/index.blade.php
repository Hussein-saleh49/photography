  @extends('admin.master')
  @section("title","Dashboard")
  @section('content')
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">Dashboard</h1>
              <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Mr.Ahmed Dashboard</li>
              </ol>
              <!-- cards -->
              <div class="row">
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-lighter-green text-white mb-4">
                          <div class="card-body">All Students</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <p class="text-white text-center py-2 display-4 fw-bolder">100</p>
                              <div class="small text-white"><i class="fas fa-users fs-2"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-light-green text-white mb-4">
                          <div class="card-body">Current Students</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <p class="text-white text-center py-2 display-4 fw-bolder">10</p>
                              <div class="small text-white"><i class="fas fa-graduation-cap fs-2"></i></div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-dark-green text-white mb-4">
                          <div class="card-body">Old Students</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <p class="text-white text-center py-2 display-4 fw-bolder">50</p>
                              <div class="small text-white"><i class="fas fa-user-graduate fs-2"></i></div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-darker-green text-white mb-4">
                          <div class="card-body">Earned</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <p class="text-white text-center py-2 display-4 fw-bolder">10.1k</p>
                              <div class="small text-white"><i class="fas fa-solid fa-money-bill fs-2"></i>
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
      </main>
  @endsection
