<?php include './include/top.php';?>
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="uil uil-home"></i>Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Buy Ships</li>
      </ol>
    </nav>
    <div class="row">
      <div class="col-xl-3 col-md-3 col-sm-12">
        <div class="container py-10 py-md-15">
          <center><span><i class="uil uil-ship"></i>Tanker</span></center><br>
          <center>
            <a href="#" class="btn btn-primary btn-sm rounded-pill mx-1 mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#modal-02">Change Type</a>            
          </center>
          <div class="modal fade" id="modal-02" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
              <div class="modal-content text-center">
                <div class="modal-body">
                  <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <!-- /.row -->
                  <h3><i class="uil uil-ship"></i>Select a vessel type to start</h3>
                  <section class="wrapper bg-light">
                      <div class="container py-14 py-md-16">
                        <!--/.row -->
                        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
                          <div class="col-md-6 col-lg-3">
                            <div class="position-relative">
                              <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                              <div class="card">
                                <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                              </div>
                              <!-- /.card -->
                            </div>
                            <!-- /div -->
                          </div>
                          <!--/column -->
                          <div class="col-md-6 col-lg-3">
                            <div class="position-relative">
                              <div class="shape rounded bg-soft-red rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                              <div class="card">
                                <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t2.jpg" srcset="./assets/img/avatars/t2@2x.jpg 2x" alt="" /></figure>
                              </div>
                              <!-- /.card -->
                            </div>
                            <!-- /div -->
                          </div>
                          <!--/column -->
                          <div class="col-md-6 col-lg-3">
                            <div class="position-relative">
                              <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                              <div class="card">
                                <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t3.jpg" srcset="./assets/img/avatars/t3@2x.jpg 2x" alt="" /></figure>
                              </div>
                              <!-- /.card -->
                            </div>
                            <!-- /div -->
                          </div>
                          <!--/column -->
                          <div class="col-md-6 col-lg-3">
                            <div class="position-relative">
                              <div class="shape rounded bg-soft-violet rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                              <div class="card">
                                <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t4.jpg" srcset="./assets/img/avatars/t4@2x.jpg 2x" alt="" /></figure>
                              </div>
                              <!-- /.card -->
                            </div>
                            <!-- /div -->
                          </div>
                          <!--/column -->
                        </div>
                        <!--/.row -->
                      </div>
                      <!-- /.container -->
                    </section>
                    <!-- /section -->
                  <hr class="my-8">
                  <div class="d-flex justify-content-end">
                    <button class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </div>
                <!--/.modal-body -->
              </div>
              <!--/.modal-content -->
            </div>
            <!--/.modal-dialog -->
          </div>
          <!--/.modal -->
          <br>
          <div id="accordion-1" class="accordion-wrapper">
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Capacity</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault"><10,000</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">10,000-30,000</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">30,001-60,000</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">>60,001-80,000</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">80,001-100,000</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">>100,000</label>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Age</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">< 5years</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">5-10 years</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">11-15 years</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">>15 years</label>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">Ship Builder</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Japan</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">South Korea</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">China</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Other</label>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-1-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Popular Tags</button>
                </div>
                <!-- /.card-header -->
                <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                  <div class="card-body">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Free Ship</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Hot Sale</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">China Domestic Ships</label>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
          </div>
          <hr class="my-8">
          <div class="form-floating row mb-4">
            <button type="button" class="btn btn-primary btn-blue btn-sm search-btn"><span>Search</span></button>
          </div>
          <br>
          <h3>Didn't find the right vessel?</h3>
          <p>Please tell us your requirements, and we will recommend more vesssels for you.</p>
          <div class="form-floating row mb-4">
            <button type="button" class="btn btn-primary btn-blue btn-sm search-btn"><span>Purchase Request</span></button>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-md-9 col-sm-12">
        <div class="container">
          <div class="row">
            <div class="col-md-8 d-flex justify-content-center">
              <h6>There are 131 similar transactions in the past 3 months</h6>

            </div>
            <div class="col-md-4">
              <center><span><i class="uil uil-ship"></i>131 Transactions</span></center><br>
            </div>
          </div>
          <div class="row">
              <div class="col-md-5 col-xl-5 d-flex justify-content-start">
                <p><i class="uil uil-arrow-circle-up"></i>Hight Price</p>&nbsp;
                &nbsp;&nbsp;&nbsp;<h1>USD 98.00M</h1>
              </div>
              <div class="col-md-5 col-xl-5 d-flex justify-content-start">
                 <p><i class="uil uil-arrow-circle-down"></i>Lowest Price</p>&nbsp;
                &nbsp;&nbsp;&nbsp;<h1>USD 98.00M</h1>
              </div>
              <div class="col-md-2 col-xl-2 d-flex justify-content-start">
                <a href="#" class="btn btn-blue btn-sm rounded-pill"> 
                Transactions</a>
              </div>
          </div><br>
          <!--/.row -->
          <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
            <div class="col-md-6 col-lg-4 team-member" data_name="Coriss Ambady" data_job="Financial Analyst" data_gender="m">
              <div class="position-relative">
                <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <div class="col-md-6 col-lg-4 team-member" data_name="Coriss Ambady" data_job="Financial Analyst" data_gender="m">
              <div class="position-relative">
                <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4 team-member" data_name="Cory Zamora" data_job="Marketing Specialist" data_gender="w">
              <div class="position-relative">
                <div class="shape rounded bg-soft-red rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t2.jpg" srcset="./assets/img/avatars/t2@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4 team-member" data_name="Nikolas Brooten" data_job="Sales Manager" data_gender="m">
              <div class="position-relative">
                <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t3.jpg" srcset="./assets/img/avatars/t3@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4 team-member" data_name="Jackie Sanders" data_job="Investment Planner" data_gender="w">
              <div class="position-relative">
                <div class="shape rounded bg-soft-violet rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t4.jpg" srcset="./assets/img/avatars/t4@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <div class="col-md-6 col-lg-4 team-member" data_name="Coriss Ambady" data_job="Financial Analyst" data_gender="m">
              <div class="position-relative">
                <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4 team-member" data_name="Cory Zamora" data_job="Marketing Specialist" data_gender="w">
              <div class="position-relative">
                <div class="shape rounded bg-soft-red rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t2.jpg" srcset="./assets/img/avatars/t2@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4 team-member" data_name="Nikolas Brooten" data_job="Sales Manager" data_gender="m">
              <div class="position-relative">
                <div class="shape rounded bg-soft-green rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t3.jpg" srcset="./assets/img/avatars/t3@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4 team-member" data_name="Jackie Sanders" data_job="Investment Planner" data_gender="w">
              <div class="position-relative">
                <div class="shape rounded bg-soft-violet rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t4.jpg" srcset="./assets/img/avatars/t4@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">USD 4.50M - 5.00M</h4>
                    <p class="mb-0">IMO 2 - SS/DD 07/2022</p>
                    <hr class="my-8">
                    <p>ID: 2022012007</p>
                    <p>Cap: 19477</p>
                    <p>Age: 23</p>
                    <p>Ship Builder: Japan</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /div -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      <br><nav aria-label="Page navigation example" style="float: right;">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
      </div>
    </div>
  </div>
</section>

<?php include './include/footer.php';?>
<!-- offset-md-1" -->