<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
                </li>
              </ul>
              <div>
                <div class="btn-wrapper">
                  <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                  <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                  <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                </div>
              </div>
            </div>
            <!-- xxxx -->
            <div class="row">
              <div class="col-lg-4 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-primary card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">Status Pending</h4>
                        <div class="row">
                          <div class="col-sm-4">
                            <p class="status-summary-ight-white mb-1">Closed Value</p>
                            <h2 class="text-info">{{ $pending }}</h2>
                          </div>
                          <div class="col-sm-8">
                            <div class="status-summary-chart-wrapper pb-4">
                              <canvas id="status-summary"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><div class="col-lg-4 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-success card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">Status Approve</h4>
                        <div class="row">
                          <div class="col-sm-4">
                            <p class="status-summary-ight-white mb-1">Closed Value</p>
                            <h2 class="text-info">{{ $approve }}</h2>
                          </div>
                          <div class="col-sm-8">
                            <div class="status-summary-chart-wrapper pb-4">
                              <canvas id="status-summary"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                    <div class="card bg-danger card-rounded">
                      <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">Status Reject</h4>
                        <div class="row">
                          <div class="col-sm-4">
                            <p class="status-summary-ight-white mb-1">Closed Value</p>
                            <h2 class="text-info">{{ $reject }}</h2>
                          </div>
                          <div class="col-sm-8">
                            <div class="status-summary-chart-wrapper pb-4">
                              <canvas id="status-summary"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
      </div>
    </footer>
    <!-- partial -->
  </div>