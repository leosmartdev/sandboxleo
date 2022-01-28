<?php include './include/top.php';?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#"><i class="uil uil-home"></i>Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Crewing</li>
  </ol>
</nav>
<section class="wrapper bg-light">
  <br>
  <ul class="nav nav-tabs nav-pills">
    <li class="nav-item"> 
      <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">
        <i class="uil uil-phone-volume pe-1"></i>
        <span>Secondhand Sales</span>
      </a>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
        <i class="uil uil-shield-exclamation pe-1"></i>
        <span>New Building</span>
      </a> 
    </li>
  </ul>
  <!-- /.nav-tabs -->
  <div class="tab-content">
  <div class="tab-pane fade show active" id="tab1-1">
    <div class="card">
      <div class="card-body">
        <h6><i class="uil uil-weight"></i> Vessel Information</h6>
        <hr class="my-8" />
        <span>*My Vessel</span>
        <div class="col-md-6 col-xl-6 form-floating mb-4">
          <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
          <label for="textInputExample">Text Input</label>
        </div>
        <span>*Upload Photos</span><br>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="mb-3">
              <label for="formFile" class="form-label">Hull</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="mb-3">
              <label for="formFile" class="form-label">Deck</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="mb-3">
              <label for="formFile" class="form-label">Bridge</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="mb-3">
              <label for="formFile" class="form-label">Engine Room</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="mb-3">
              <label for="formFile" class="form-label">Accomodation</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="mb-3">
              <label for="formFile" class="form-label">Galley</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="mb-3">
              <label for="formFile" class="form-label">Others</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <span>Upload Ship information</span>&nbsp;&nbsp;&nbsp;<label class="form-label">Please include information such as ship plans, fuel consumption data, and class records</label>
        <div class="row">
          <div class="col-md-10 col-xl-10">
            <div class="mb-3">
              <div class="d-flex">
                <span>Photo</span>&nbsp;&nbsp;&nbsp;
                <label class="form-label">You may upload up to 20 images. (File size limit: 5 MB, recommended image dimension:800*800px)</label>
              </div>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-xl-10">
            <div class="mb-3">
              <div class="d-flex">
                <span>Files</span>&nbsp;&nbsp;&nbsp;
                <label class="form-label">Excel/Word/PDF only. File size limit: 5 MB.</label>
              </div>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="card">
      <div class="card-body">
        <h6><i class="uil uil-monitor"></i>Terms</h6>
        <hr class="my-8" />
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <span>*Preferred Delivery Area</span>
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter a location</label>
            </div>
          </div>
          <div class="col-md-6 col-xl-6">
            <span>*Estimated Delivery Date</span>
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Start date ~ End date <i class="uil uil-calendar-alt"></i></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <span>*Expected Selling Price</span>
            <div class="row">
              <div class="col-md-4 col-xl-4">
                <div class="form-select-wrapper">
                  <select class="form-select" aria-label="Default select example">
                    <option value="0">USD</option>
                    <option value="1">CNY</option>
                  </select>
                </div>
              </div>
              <div class="col-md-8 col-xl-8">
                <div class="d-flex">
                  <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                    <label for="textInputExample">Please enter</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                    <label for="textInputExample">Please enter</label>
                  </div>
                </div>
              </div><br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-xl-2">
            <span>Remarks</span>
          </div>
          <div class="col-md-10 col-xl-10">
            <div class="form-floating mb-4">
              <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 150px" required></textarea>
              <label for="textareaExample">Please advise any ohter special requirements</label>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="card">
      <div class="card-body">
        <h6><i class="uil uil-info"></i> Contact Information</h6>
        <hr class="my-8" />
        <div class="row">
          <span>*Contact Info (At least one is required)</span>
          <div class="col-md-4 col-xl-4">
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter E-mail</label>
            </div>
          </div>
          <div class="col-md-8 col-xl-8">
            <div class="row">
              <div class="col-md-4 col-xl-4">
                <div class="form-select-wrapper">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>+65</option>
                    <option value="1">+378</option>
                    <option value="2">+239</option>
                    <option value="3">+221</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-xl-6">
                <div class="form-floating mb-4">
                  <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                  <label for="textInputExample">Please enter phone number</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <span>Company Name</span>
          </div>
          <div class="col-md-8 col-xl-8">
            <span>Contact Person</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter company name</label>
            </div>
          </div>
          <div class="col-md-7 col-xl-7">
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter contact person</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
  <!--/.tab-pane -->
  <div class="tab-pane fade" id="tab1-2">
    <div class="card">
      <div class="card-body">
        <h6><i class="uil uil-weight"></i> Vessel Information</h6>
        <hr class="my-8">
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <span>*Vessel Name</span>
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Vessel Name/IMO</label>
            </div>
          </div>
          <div class="col-md-6 col-xl-6">
            <span>*Vessel Type</span>
            <div class="form-select-wrapper">
              <select class="form-select" aria-label="Default select example">
                <option selected>Please select vessel type</option>
                <option value="1">Dry Bulk</option>
                <option value="2">Tanker</option>
                <option value="3">Container</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <span>*Ship Builder</span>
            <div class="form-select-wrapper">
              <select class="form-select" aria-label="Default select example">
                <option selected>Please select ship bulider</option>
                <option value="1">China</option>
                <option value="2">Japan</option>
                <option value="3">South Koera</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 col-xl-6">
            <span>*Engine Model</span>
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter engine model</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <span>*Estimated Delivery Date</span>
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Start date ~ End date <i class="uil uil-calendar-alt"></i></label>
            </div>
          </div>
          <div class="col-md-6 col-xl-6">
            <span>*No.of New Building</span>
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter a number</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <span>*Expected Selling Price</span>
            <div class="row">
              <div class="col-md-4 col-xl-4">
                <div class="form-select-wrapper">
                  <select class="form-select" aria-label="Default select example">
                    <option value="0">USD</option>
                    <option value="1">CNY</option>
                  </select>
                </div>
              </div>
              <div class="col-md-8 col-xl-8">
                <div class="d-flex">
                  <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                    <label for="textInputExample">Please enter</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                    <label for="textInputExample">Please enter</label>
                  </div>
                </div>
              </div><br>
            </div>
          </div>
          <div class="col-md-6 col-xl-6">
            <span>Capacity</span>
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter capacity</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-xl-2">
            <span>Remarks</span>
          </div>
          <div class="col-md-10 col-xl-10">
            <div class="form-floating mb-4">
              <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 150px" required></textarea>
              <label for="textareaExample">Please advise any ohter special requirements</label>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="card">
      <div class="card-body">
        <h6><i class="uil uil-info"></i> Contact Information</h6>
        <hr class="my-8" />
        <div class="row">
          <span>*Contact Info (At least one is required)</span>
          <div class="col-md-4 col-xl-4">
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter E-mail</label>
            </div>
          </div>
          <div class="col-md-8 col-xl-8">
            <div class="row">
              <div class="col-md-4 col-xl-4">
                <div class="form-select-wrapper">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>+65</option>
                    <option value="1">+378</option>
                    <option value="2">+239</option>
                    <option value="3">+221</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-xl-6">
                <div class="form-floating mb-4">
                  <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                  <label for="textInputExample">Please enter phone number</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <span>Company Name</span>
          </div>
          <div class="col-md-8 col-xl-8">
            <span>Contact Person</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xl-4">
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter company name</label>
            </div>
          </div>
          <div class="col-md-7 col-xl-7">
            <div class="form-floating mb-4">
              <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
              <label for="textInputExample">Please enter contact person</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<br>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault"> Submitting your requests means you agree with Marine Online <a href="#">terms and conditions </a></label>
</div>
<div class="row">
  <div class="col-md-9 col-xl-9">
  </div>
  <div class="col-md-3 col-xl-3">
    <a href="#" class="btn btn-blue" style="float: right;">Submit</a>
  </div>
</div>
<?php include './include/footer.php';?>