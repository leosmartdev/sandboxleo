<?php include './include/top.php';?>

<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-xl-3 col-md-3 col-sm-12">
        <div class="container py-5 py-md-8">
          <div class="form-floating mb-4">
            <input id="search-name" name="name" type="text" class="form-control search-input" placeholder="Text Input">
            <label for="search-name">Search Name</label>
          </div>
          <hr class="my-4" />
          <div class="form-floating mb-4">
            <select id="search-job" name="job" class="form-control form-select search-input" aria-label="Default select example">
              <option value=""></option>
              <option value="Financial Analyst">Financial Analyst</option>
              <option value="Marketing Specialist">Marketing Specialist</option>
              <option value="Sales Manager">Sales Manager</option>
              <option value="Investment Planner">Investment Planner</option>
            </select>
            <label for="search-job">Rank</label>
          </div>
          <div class="form-floating mb-4">
            <select id="search-vessel" name="vessel" class="form-control form-select search-input" aria-label="Default select example">
              <option value=""></option>
              <option value="a">Accommodation</option>
              <option value="b">4 Point Moord</option>
              <option value="c">Afframax Tanker</option>
            </select>
            <label for="search-vessel">Vessel Type</label>
          </div>
          <div class="form-floating mb-4">
            <input id="search-nationalities" name="nationalities" type="text" class="form-control search-input" placeholder="Text Input">
            <label for="search-nationalities">Nationalities</label>
          </div>
          <div class="form-floating row mb-4">
            <button type="button" class="btn btn-primary btn-sm search-btn"><span>CLEAR</span></button>
          </div>
          <hr class="double my-4" />
          <label for="age" class="mb-2">Age:</label>
          <div class="form-floating mb-4">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="age" id="age_1">
              <label class="form-check-label" for="age_1"> Young - Old </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="age" id="age_2" checked>
              <label class="form-check-label" for="age_2"> Default checked radio </label>
            </div>
          </div>
          <label for="postby" class="mb-2">Posted by:</label>
          <div class="form-floating mb-4">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="postby" id="postby_1">
              <label class="form-check-label" for="postby_1"> All </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="postby" id="postby_2" checked>
              <label class="form-check-label" for="postby_2"> Manning Agency </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="postby" id="postby_3" checked>
              <label class="form-check-label" for="postby_3"> Seafarers </label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-md-9 col-sm-12">
        <div class="container">
          <div class="row mb-3">
            <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
              <h2 class="fs-15 text-uppercase text-muted mb-3">Our Team</h2>
              <h3 class="display-4 mb-7 px-lg-2 px-xl-1">Think unique and be innovative. Make a difference with Sandbox.</h3>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
            <div class="col-md-6 col-lg-4 team-member" data_name="Coriss Ambady" data_job="Financial Analyst" data_gender="m">
              <div class="position-relative">
                <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                <div class="card">
                  <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                  <div class="card-body px-6 py-5">
                    <h4 class="mb-1">Coriss Ambady</h4>
                    <p class="mb-0">Financial Analyst</p>
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
                    <h4 class="mb-1">Cory Zamora</h4>
                    <p class="mb-0">Marketing Specialist</p>
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
                    <h4 class="mb-1">Nikolas Brooten</h4>
                    <p class="mb-0">Sales Manager</p>
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
                    <h4 class="mb-1">Jackie Sanders</h4>
                    <p class="mb-0">Investment Planner</p>
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
      </div>
    </div>
  </div>
</section>

<?php include './include/footer.php';?>

<script type="text/javascript">
  $(document).ready(function(){
    $(".search-input").on("input", function(event) {
      var id = event.target.id;
      var name = event.target.name;
      // console.log(id, name);
      switch(name) {
        case "name":
          break;
        case "rank":
          break;
        case "job":
          break;
        case "gender":
          break;
      }
      searchByFilter();
    });
    // $("select.search-input").on("change", function(event) {
    //  searchByFilter();
    // });
  });

  function searchByFilter() {
    var search_name = $("#search-name").val();
    var search_rank = $("#search-rank").val();
    var search_job = $("#search-job").val();
    var search_gender = $("#search-gender").val();
    var search_nationalities = $("#search-nationalities").val();
    $(".team-member").show();
    // if (search_name && search_name.trim() !== "") {
    //  $(".team-member:not(:contains([data_name*='"+search_name+"']))").hide();
    // }
    var hideMembers = $('.team-member').filter(function() {
      var result = false;
      if (search_name && search_name.trim() !== "") { 
          result = $(this).attr('data_name').toLowerCase().indexOf(search_name.toLowerCase()) === -1;
      }
      if (search_job && search_job.trim() !== "") { 
          result = result === false ? $(this).attr('data_job').toLowerCase().indexOf(search_job.toLowerCase()) === -1 : result;
      }
      if (search_gender && search_gender.trim() !== "") { 
          result = result === false ? $(this).attr('data_gender').toLowerCase().indexOf(search_gender.toLowerCase()) === -1 : result;
      }
      if (search_nationalities && search_nationalities.trim() !== "") { 
          result = result === false ? $(this).attr('data_nationality').toLowerCase().indexOf(search_nationalities.toLowerCase()) === -1 : result;
      }
      return result;
    });
    hideMembers.hide();
  }
</script>