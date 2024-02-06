<!-- Section: Design Block -->
<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>


<div id="badge_modal" class="modal" tabindex="-1" role="dialog" data-bs-backdrop='static'>
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body" id="pdf_badge">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="generatePDF()">Download</button>
      </div>
    </div>
  </div>
</div>


<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Check-in here
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">

            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-pre-reg" data-mdb-toggle="pill" href="#pills-pre-reg" role="tab"
                  aria-controls="pills-pre-reg" aria-selected="true">Pre-registered User</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-walk-in" data-mdb-toggle="pill" href="#pills-walk-in" role="tab"
                  aria-controls="pills-walk-in" aria-selected="false">Walk-in User</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="pills-pre-reg" role="tabpanel" aria-labelledby="tab-pre-reg">
                <form id="pre-reg-form">
                  <div class="form-outline mb-4 d-block" id="prereg_uniqueid">
                    <input type="text" id="uniqueid" class="form-control" required placeholder="User ID" />
                    <button type="button" class="btn btn-primary btn-block mt-5" id="unique_user">
                      Next
                    </button>
                  </div>
                  <div id="prereg_userdetails" class="d-none">
                    <div class="form-outline mb-4">
                      <input type="text" id="first_name" class="form-control" autocomplete="off" readonly />
                      <label class="form-label" for="first_name">First Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="text" id="last_name" class="form-control" autocomplete="off" readonly />
                      <label class="form-label" for="last_name">Last Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" id="email_id" class="form-control" autocomplete="off" readonly />
                      <label class="form-label" for="email_id">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="tel" id="phone_no" class="form-control" autocomplete="off" readonly />
                      <label class="form-label" for="phone_no">Phone</label>
                    </div>
                    <button id="prereg_btn" type="submit" class="btn btn-primary btn-block mb-3">Next</button>
                  </div>
                  <div class="d-none" id="prereg_livecapture">
                  </div>
                </form>
              </div>
              <div class="tab-pane fade show" id="pills-walk-in" role="tabpanel" aria-labelledby="tab-register">
                <form id="walk-in-form">
                  <div id="walkin_userdetail" class="d-block">
                    <div class="form-outline mb-4">
                      <input type="text" id="firstname" class="form-control" autocomplete="off" required />
                      <label class="form-label" for="firstname">First Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="text" id="lastname" class="form-control" autocomplete="off" required />
                      <label class="form-label" for="lastname">Last Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" id="email" class="form-control" autocomplete="off" required />
                      <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="tel" id="phone" class="form-control" autocomplete="off" required />
                      <label class="form-label" for="phone">Phone</label>
                    </div>
                    <button id="walkin_btn" type="submit" class="btn btn-primary btn-block mb-3">Next</button>
                  </div>
                  <div class="d-none" id="walkin_livecapture">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  const baseUrl = '<?php echo site_url() ?>/';
  //download pdf
  function generatePDF() {
    const { jsPDF } = window.jspdf;
    let doc = new jsPDF('portrait', 'pt', 'a4');
    let pdfjs = document.querySelector('#pdf_badge');
    doc.html(pdfjs, {
      html2canvas: { scale: .75 },
      callback: function (doc) {
        doc.save('badge.pdf');
      }
    });
    setTimeout(function() { 
        location.reload();
    }, 3000);
  }

  $(document).ready(function () {
    //load webcam
    $("#walk-in-form").submit(function (event) {
      $("#walkin_livecapture").removeClass("d-none");
      $("#walkin_userdetail").addClass("d-none");
      $.ajax({
        type: "POST",
        url: baseUrl + 'home/load_camera',
        data: {},
        dataType: "html",
        encode: true,
      }).done(function (data) {
        $("#walkin_livecapture").html(data);
      });
    });

    //show forms based on attendee type
    $("#tab-walk-in").click(function () {
      $("#tab-pre-reg").removeClass("active");
      $("#tab-walk-in").addClass("active");
      $("#pills-pre-reg").removeClass("active");
      $("#pills-walk-in").addClass("active");
    });
    $("#tab-pre-reg").click(function () {
      $("#tab-pre-reg").addClass("active");
      $("#tab-walk-in").removeClass("active");
      $("#pills-pre-reg").addClass("active");
      $("#pills-walk-in").removeClass("active");
    });
    //fetch user details corresponding to provided user ID
    $(document).on("click", "#unique_user", function () {
      var formData = {
        uniqueid: $("#uniqueid").val()
      };
      $.ajax({
        type: "POST",
        url: baseUrl + 'User/check_user',
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        if (data.status == true) {
          $("#first_name").val(data.firstname);
          $("#last_name").val(data.lastname);
          $("#email_id").val(data.email);
          $("#phone_no").val(data.phone);
          $("#prereg_uniqueid").addClass("d-none");
          $("#prereg_userdetails").removeClass("d-none");
        } else {
          alert(data.msg);
        }
      });
    });
    //load webcam
    $(document).on("click", "#prereg_btn", function () {
      $("#prereg_userdetails").addClass("d-none");
      $("#prereg_livecapture").removeClass("d-none");
      $.ajax({
        type: "POST",
        url: baseUrl + 'home/load_camera',
        data: {},
        dataType: "html",
        encode: true,
      }).done(function (data) {
        $("#prereg_livecapture").html(data);
      });
    });
  });

 //update user details and upload captured live photo
  $(document).on("click", "#photo_submit", function () {
    var formData = {
      firstname: $("#firstname").val(),
      lastname: $("#lastname").val(),
      email: $("#email").val(),
      phone: $("#phone").val(),
      image: $("#user_img").val(),
      uniqueid:$("#uniqueid").val()
    };
    $.ajax({
      type: "POST",
      url: baseUrl + 'User/update_user',
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      if (data.status == true) {
        Webcam.reset('#my_camera')
        load_badge(data.uniqueid);
      }
    });
  });

  //fetch data for geneating event badge
  function load_badge(uniqueid) {
    $.ajax({
      type: "POST",
      url: baseUrl + 'User/get_user_details',
      data: { uniqueid: uniqueid },
      dataType: "html",
      encode: true,
    }).done(function (data) {
      $("#badge_modal .modal-body").html(data);
      $('#badge_modal').modal('show');
    });
  }
</script>