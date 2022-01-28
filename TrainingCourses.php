<?php include './include/top.php';?>

<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-xl-3 col-md-3 col-sm-12">
        <div class="container py-2 py-md-3">
          <div class="form-floating mb-4">Search &amp; Filter</div>
          <div class="form-floating mb-4">
            <select id="search-region" name="region" class="form-control form-select search-input" aria-label="Default select example">
              <option value=""></option>
              <option value="AMERICAS">AMERICAS</option>
              <option value="ASIA-PACIFIC">ASIA-PACIFIC</option>
              <option value="EUROPE">EUROPE</option>
              <option value="MIDDLE EASE-AFRICA">MIDDLE EASE-AFRICA</option>
            </select>
            <label for="search-region">Select a region</label>
          </div>
          <div class="form-floating mb-4">
            <input id="search-country" name="country" type="text" class="form-control search-input" placeholder="Text Input">
            <label for="search-country">Enter a country</label>
          </div>
          <div class="form-floating mb-4">
            <input id="search-port" name="port" type="text" class="form-control search-input" placeholder="Text Input">
            <label for="search-port">Input a port</label>
          </div>
          <div class="form-floating mb-4">
            <input id="search-keywords" name="keywords" type="text" class="form-control search-input" placeholder="Text Input">
            <label for="search-keywords">Input keywords</label>
          </div>
          <div class="form-floating row mb-4">
            <button type="button" class="btn btn-primary btn-sm search-btn"><span>SEARCH</span></button>
          </div>
          <hr class="double my-4" />
          <div class="form-floating mb-4">
            <ul class="list-unstyled fs-sm lh-sm text-reset">
              <li class="mb-4">
                <a href="#">General Courses</a>
              </li>
              <li class="mb-4">
                <a href="#">STCW Courses</a>
              </li>
              <li class="mb-4">
                <a href="#">Offshore Courses</a>
              </li>
              <li class="mb-4">
                <a href="#">In-house Courses</a>
              </li>
              <li class="mb-4">
                <a href="#">Maritime Qualification</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-md-9 col-sm-12">
        <div class="container">
          <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
            <div class="job-list mb-10">
              <!-- <h3 class="mb-4">Design</h3> -->
              <a href="#" class="card mb-4">
                <div class="card-body p-5">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-4 mb-2 mb-md-0 d-flex align-items-center text-body">
                      <span class="avatar bg-red text-white w-9 h-9 fs-17 me-3">GD</span> Senior Graphic Designer </span>
                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                      <i class="uil uil-location-arrow me-1"></i> San Francisco, US </span>
                    <span class="col-5 col-md-3 col-lg-2 d-flex align-items-center text-red">
                       USD 217.50 </span>
                    <!-- <span class="d-none d-lg-block col-1 text-center text-body">
                      <i class="uil uil-angle-right-b"></i>
                    </span> -->
                    <span class="col-7 col-md-4 col-lg-3 d-flex">
                      <button class="btn btn-primary btn-sm">ADD TO CART</button>
                    </span>
                  </span>
                </div>
                <!-- /.card-body -->
              </a>
              <!-- /.card -->
              <a href="#" class="card mb-4">
                <div class="card-body p-5">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-4 mb-2 mb-md-0 d-flex align-items-center text-body">
                      <span class="avatar bg-green text-white w-9 h-9 fs-17 me-3">UX</span> UI/UX Designer </span>
                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                      <i class="uil uil-location-arrow me-1"></i> Anywhere </span>
                    <span class="col-5 col-md-3 col-lg-2 d-flex align-items-center text-red">
                       USD 217.50 </span>
                    <!-- <span class="d-none d-lg-block col-1 text-center text-body">
                      <i class="uil uil-angle-right-b"></i>
                    </span> -->
                    <span class="col-7 col-md-4 col-lg-3 d-flex">
                      <button class="btn btn-primary btn-sm">ADD TO CART</button>
                    </span>
                  </span>
                </div>
                <!-- /.card-body -->
              </a>
              <!-- /.card -->
              <a href="#" class="card mb-4">
                <div class="card-body p-5">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-4 mb-2 mb-md-0 d-flex align-items-center text-body">
                      <span class="avatar bg-yellow text-white w-9 h-9 fs-17 me-3">AN</span> Multimedia Artist &amp; Animator </span>
                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                      <i class="uil uil-location-arrow me-1"></i> Birmingham, UK </span>
                    <span class="col-5 col-md-3 col-lg-2 d-flex align-items-center text-red">
                       USD 217.50 </span>
                    <!-- <span class="d-none d-lg-block col-1 text-center text-body">
                      <i class="uil uil-angle-right-b"></i>
                    </span> -->
                    <span class="col-7 col-md-4 col-lg-3 d-flex">
                      <button class="btn btn-primary btn-sm">ADD TO CART</button>
                    </span>
                  </span>
                </div>
                <!-- /.card-body -->
              </a>
              <!-- /.card -->
              <a href="#" class="card mb-4">
                <div class="card-body p-5">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-4 mb-2 mb-md-0 d-flex align-items-center text-body">
                      <span class="avatar bg-purple text-white w-9 h-9 fs-17 me-3">FE</span> Front End Developer </span>
                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                      <i class="uil uil-location-arrow me-1"></i> Sydney, AU </span>
                    <span class="col-5 col-md-3 col-lg-2 d-flex align-items-center text-red">
                       USD 217.50 </span>
                    <!-- <span class="d-none d-lg-block col-1 text-center text-body">
                      <i class="uil uil-angle-right-b"></i>
                    </span> -->
                    <span class="col-7 col-md-4 col-lg-3 d-flex">
                      <button class="btn btn-primary btn-sm">ADD TO CART</button>
                    </span>
                  </span>
                </div>
                <!-- /.card-body -->
              </a>
              <!-- /.card -->
              <a href="#" class="card mb-4">
                <div class="card-body p-5">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-4 mb-2 mb-md-0 d-flex align-items-center text-body">
                      <span class="avatar bg-orange text-white w-9 h-9 fs-17 me-3">MD</span> Mobile Developer </span>
                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                      <i class="uil uil-location-arrow me-1"></i> San Francisco, US </span>
                    <span class="col-5 col-md-3 col-lg-2 d-flex align-items-center text-red">
                       USD 217.50 </span>
                    <!-- <span class="d-none d-lg-block col-1 text-center text-body">
                      <i class="uil uil-angle-right-b"></i>
                    </span> -->
                    <span class="col-7 col-md-4 col-lg-3 d-flex">
                      <button class="btn btn-primary btn-sm">ADD TO CART</button>
                    </span>
                  </span>
                </div>
                <!-- /.card-body -->
              </a>
              <!-- /.card -->
              <a href="#" class="card mb-4">
                <div class="card-body p-5">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-4 mb-2 mb-md-0 d-flex align-items-center text-body">
                      <span class="avatar bg-pink text-white w-9 h-9 fs-17 me-3">
                        NT
                        <!-- <img src="./assets/img/photos/p6.jpg" srcset="./assets/img/photos/p6@2x.jpg 2x" alt=""> -->
                      </span> 
                      .NET Developer 
                    </span>
                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                      <i class="uil uil-location-arrow me-1"></i> Manchester, UK </span>
                    <span class="col-5 col-md-3 col-lg-2 d-flex align-items-center text-red">
                       USD 217.50 </span>
                    <!-- <span class="d-none d-lg-block col-1 text-center text-body">
                      <i class="uil uil-angle-right-b"></i>
                    </span> -->
                    <span class="col-7 col-md-4 col-lg-3 d-flex">
                      <button class="btn btn-primary btn-sm">ADD TO CART</button>
                    </span>
                  </span>
                </div>
                <!-- /.card-body -->
              </a>
              <!-- /.card -->
            </div>
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