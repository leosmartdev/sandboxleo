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
          <div class="form-floating mb-4">Filter by Vessel Type</div>
          <div class="form-floating mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_1">
              <label class="form-check-label" for="type_chk_1"> AHTS </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_2">
              <label class="form-check-label" for="type_chk_2"> Barge </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_3">
              <label class="form-check-label" for="type_chk_3"> Bulk Carrier </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_4">
              <label class="form-check-label" for="type_chk_4"> Chemical Tanker </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_5">
              <label class="form-check-label" for="type_chk_5"> Container </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_6">
              <label class="form-check-label" for="type_chk_6"> Crew Boat </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_7">
              <label class="form-check-label" for="type_chk_7"> General Cargo </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_8">
              <label class="form-check-label" for="type_chk_8"> LNG </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_9">
              <label class="form-check-label" for="type_chk_9"> LPG </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_10">
              <label class="form-check-label" for="type_chk_10"> Multi-Purpose </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_11">
              <label class="form-check-label" for="type_chk_11"> Oil Tanker </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_12">
              <label class="form-check-label" for="type_chk_12"> Passenger Ship </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_13">
              <label class="form-check-label" for="type_chk_13"> Platform Supply Vessel (PSV) </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_14">
              <label class="form-check-label" for="type_chk_14"> Reefer </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_15">
              <label class="form-check-label" for="type_chk_15"> RO-RO </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="type_chk_16">
              <label class="form-check-label" for="type_chk_16"> Passenger Ship-RO </label>
            </div>
          </div>
          <hr class="double my-4" />
          <div class="form-floating mb-4">Filter by Nationality</div>
          <div class="form-floating mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="national_chk_1">
              <label class="form-check-label" for="national_chk_1"> Chinese </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="national_chk_2">
              <label class="form-check-label" for="national_chk_2"> Filipino </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="national_chk_3">
              <label class="form-check-label" for="national_chk_3"> Indonesian </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="national_chk_4">
              <label class="form-check-label" for="national_chk_4"> Russian </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="national_chk_5">
              <label class="form-check-label" for="national_chk_5"> Ukrainian </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="national_chk_6">
              <label class="form-check-label" for="national_chk_6"> Indian </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="national_chk_7">
              <label class="form-check-label" for="national_chk_7"> Vietnamese </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="national_chk_8">
              <label class="form-check-label" for="national_chk_8"> Myanmar </label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-md-9 col-sm-12">
        <div class="container">
          <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
            <div class="agency-list mb-10">
              <div class="card-body p-5">
                <div class="row justify-content-between align-items-center">
                  <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                    <figure class="px-3 px-md-0 px-xxl-2"><img src="./assets/img/brands/z1.png" alt="" /></figure> PRIORITY CREW MEMBERS </span>
                  <span class="col-7 col-md-4 col-lg-3 text-body align-items-center">
                    <div><i class="uil uil-location-arrow me-1"></i> San Francisco, US </div>
                    <div><span class="ratings four mb-3"></span></div>
                  </span>
                    
                  <span class="col-7 col-md-4 col-lg-3 d-flex">
                    <button type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"><path fill="#ffffff" fill-rule="evenodd" d="M15.919.06a.237.237 0 0 0-.259-.037L.138 7.328a.243.243 0 1 0-.005.437l4.393 2.184c.081.04.177.03.249-.024l4.27-3.233-3.352 3.493a.244.244 0 0 0-.067.188l.334 4.403a.242.242 0 0 0 .238.224c.069 0 .135-.03.181-.084l2.332-2.737 2.882 1.395c.063.03.135.032.199.004a.241.241 0 0 0 .132-.15L15.99.315a.244.244 0 0 0-.07-.255z"></path></svg><span>send enquiry</span></button>
                  </span>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-body p-5">
                <div class="row justify-content-between align-items-center">
                  <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                    <figure class="px-3 px-md-0 px-xxl-2"><img src="./assets/img/brands/z2.png" alt="" /></figure> PRIORITY CREW MEMBERS </span>
                  <span class="col-7 col-md-4 col-lg-3 text-body align-items-center">
                    <div><i class="uil uil-location-arrow me-1"></i> San Francisco, US </div>
                    <div><span class="ratings four mb-3"></span></div>
                  </span>
                  <span class="col-7 col-md-4 col-lg-3 d-flex">
                    <button type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"><path fill="#ffffff" fill-rule="evenodd" d="M15.919.06a.237.237 0 0 0-.259-.037L.138 7.328a.243.243 0 1 0-.005.437l4.393 2.184c.081.04.177.03.249-.024l4.27-3.233-3.352 3.493a.244.244 0 0 0-.067.188l.334 4.403a.242.242 0 0 0 .238.224c.069 0 .135-.03.181-.084l2.332-2.737 2.882 1.395c.063.03.135.032.199.004a.241.241 0 0 0 .132-.15L15.99.315a.244.244 0 0 0-.07-.255z"></path></svg><span>send enquiry</span></button>
                  </span>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-body p-5">
                <div class="row justify-content-between align-items-center">
                  <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                    <figure class="px-3 px-md-0 px-xxl-2"><img src="./assets/img/brands/z3.png" alt="" /></figure> PRIORITY CREW MEMBERS </span>
                  <span class="col-7 col-md-4 col-lg-3 text-body align-items-center">
                    <div><i class="uil uil-location-arrow me-1"></i> San Francisco, US </div>
                    <div><span class="ratings four mb-3"></span></div>
                  </span>                  <span class="col-7 col-md-4 col-lg-3 d-flex">
                    <button type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"><path fill="#ffffff" fill-rule="evenodd" d="M15.919.06a.237.237 0 0 0-.259-.037L.138 7.328a.243.243 0 1 0-.005.437l4.393 2.184c.081.04.177.03.249-.024l4.27-3.233-3.352 3.493a.244.244 0 0 0-.067.188l.334 4.403a.242.242 0 0 0 .238.224c.069 0 .135-.03.181-.084l2.332-2.737 2.882 1.395c.063.03.135.032.199.004a.241.241 0 0 0 .132-.15L15.99.315a.244.244 0 0 0-.07-.255z"></path></svg><span>send enquiry</span></button>
                  </span>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-body p-5">
                <div class="row justify-content-between align-items-center">
                  <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                    <figure class="px-3 px-md-0 px-xxl-2"><img src="./assets/img/brands/z4.png" alt="" /></figure> PRIORITY CREW MEMBERS </span>
                  <span class="col-7 col-md-4 col-lg-3 text-body align-items-center">
                    <div><i class="uil uil-location-arrow me-1"></i> San Francisco, US </div>
                    <div><span class="ratings four mb-3"></span></div>
                  </span>
                  <span class="col-7 col-md-4 col-lg-3 d-flex">
                    <button type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"><path fill="#ffffff" fill-rule="evenodd" d="M15.919.06a.237.237 0 0 0-.259-.037L.138 7.328a.243.243 0 1 0-.005.437l4.393 2.184c.081.04.177.03.249-.024l4.27-3.233-3.352 3.493a.244.244 0 0 0-.067.188l.334 4.403a.242.242 0 0 0 .238.224c.069 0 .135-.03.181-.084l2.332-2.737 2.882 1.395c.063.03.135.032.199.004a.241.241 0 0 0 .132-.15L15.99.315a.244.244 0 0 0-.07-.255z"></path></svg><span>send enquiry</span></button>
                  </span>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-body p-5">
                <div class="row justify-content-between align-items-center">
                  <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                    <figure class="px-3 px-md-0 px-xxl-2"><img src="./assets/img/brands/z5.png" alt="" /></figure> PRIORITY CREW MEMBERS </span>
                  <span class="col-7 col-md-4 col-lg-3 text-body align-items-center">
                    <div><i class="uil uil-location-arrow me-1"></i> San Francisco, US </div>
                    <div><span class="ratings four mb-3"></span></div>
                  </span>
                  <span class="col-7 col-md-4 col-lg-3 d-flex">
                    <button type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"><path fill="#ffffff" fill-rule="evenodd" d="M15.919.06a.237.237 0 0 0-.259-.037L.138 7.328a.243.243 0 1 0-.005.437l4.393 2.184c.081.04.177.03.249-.024l4.27-3.233-3.352 3.493a.244.244 0 0 0-.067.188l.334 4.403a.242.242 0 0 0 .238.224c.069 0 .135-.03.181-.084l2.332-2.737 2.882 1.395c.063.03.135.032.199.004a.241.241 0 0 0 .132-.15L15.99.315a.244.244 0 0 0-.07-.255z"></path></svg><span>send enquiry</span></button>
                  </span>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-body p-5">
                <div class="row justify-content-between align-items-center">
                  <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                    <figure class="px-3 px-md-0 px-xxl-2"><img src="./assets/img/brands/z6.png" alt="" /></figure> PRIORITY CREW MEMBERS </span>
                  <span class="col-7 col-md-4 col-lg-3 text-body align-items-center">
                    <div><i class="uil uil-location-arrow me-1"></i> San Francisco, US </div>
                    <div><span class="ratings four mb-3"></span></div>
                  </span>
                  <span class="col-7 col-md-4 col-lg-3 d-flex">
                    <button type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"><path fill="#ffffff" fill-rule="evenodd" d="M15.919.06a.237.237 0 0 0-.259-.037L.138 7.328a.243.243 0 1 0-.005.437l4.393 2.184c.081.04.177.03.249-.024l4.27-3.233-3.352 3.493a.244.244 0 0 0-.067.188l.334 4.403a.242.242 0 0 0 .238.224c.069 0 .135-.03.181-.084l2.332-2.737 2.882 1.395c.063.03.135.032.199.004a.241.241 0 0 0 .132-.15L15.99.315a.244.244 0 0 0-.07-.255z"></path></svg><span>send enquiry</span></button>
                  </span>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-body p-5">
                <div class="row justify-content-between align-items-center">
                  <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                    <figure class="px-3 px-md-0 px-xxl-2"><img src="./assets/img/brands/z7.png" alt="" /></figure> PRIORITY CREW MEMBERS </span>
                  <span class="col-7 col-md-4 col-lg-3 text-body align-items-center">
                    <div><i class="uil uil-location-arrow me-1"></i> San Francisco, US </div>
                    <div><span class="ratings four mb-3"></span></div>
                  </span>
                  <span class="col-7 col-md-4 col-lg-3 d-flex">
                    <button type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"><path fill="#ffffff" fill-rule="evenodd" d="M15.919.06a.237.237 0 0 0-.259-.037L.138 7.328a.243.243 0 1 0-.005.437l4.393 2.184c.081.04.177.03.249-.024l4.27-3.233-3.352 3.493a.244.244 0 0 0-.067.188l.334 4.403a.242.242 0 0 0 .238.224c.069 0 .135-.03.181-.084l2.332-2.737 2.882 1.395c.063.03.135.032.199.004a.241.241 0 0 0 .132-.15L15.99.315a.244.244 0 0 0-.07-.255z"></path></svg><span>send enquiry</span></button>
                  </span>
                </div>
              </div>
              <!-- /.card-body -->
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