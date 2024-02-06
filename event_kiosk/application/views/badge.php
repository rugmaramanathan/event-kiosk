<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
  type='text/css'>
<style>
  .gradient-custom {
    /* fallback for old browsers */
    background: #f6d365;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
  }
</style>
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="row">
        <div class="col col-lg-12 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-6 border-end">
                <div class="card-body p-4">
                  <h5 class="card-title">Event Details</h5>
                  <div class="row pt-1">
                    <div class="row pt-1">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                    </div>
                    <div class="row pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                    </div>
                    <div class="row pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua.
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-6">
                <div class="card-body p-4">
                  <img src="<?= base_url() ?>assets/images/event.jpg" class="w-100 shadow-1-strong rounded" />
                  <div class="row pt-1">
                    <div class="card">
                      <div class="card-body">
                        <h6>Opening Times</h6>
                        <hr class="mt-0 mb-4">
                        <ul class="list-group list-group-flush">
                          <li
                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            18 Feb
                            <span>01.00pm - 7.00pm</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                            19-21 Feb
                            <span>11.00am - 7.00pm</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                            22 Feb
                            <span>11.00am - 3.00pm</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-lg-12 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-6 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="<?= base_url() ?>assets/images/user_images/<?= empty($image )?'default_user.png':$image?>" alt="Avatar" class="img-fluid my-5"
                  style="width: 80px;" />
                <h5>
                  <?= $firstname . ' ' . $lastname ?>
                </h5>
                <p>
                  <?= $email ?>
                </p>
                <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?= $uniqueid ?>&choe=UTF-8" />
                <p class="fs-6 fw-light">
                  <?= $uniqueid ?>
                </p>
              </div>
              <div class="col-md-6">
                <div class="card-body p-4">
                  <h6>Lorem ipsum</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Dolor sit amet</h6>
                      <p class="text-muted">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Dolor sit amet</h6>
                      <p class="text-muted">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                    </div>
                  </div>
                  <div class="row pt-1 d-inline " data-html2canvas-ignore>
                    <i class="fa fa-facebook-f fa-1x d-inline" style="color: #3b5998;"></i>
                    <i class="fa fa-twitter fa-1x d-inline" style="color: #55acee;"></i>
                    <i class="fa fa-instagram fa-1x d-inline" style="color: #ac2bac;"></i>
                    <i class="fa fa-linkedin-in fa-1x d-inline" style="color: #0082ca;"></i>
                    <i class="fa fa-pinterest fa-1x d-inline" style="color: #c61118;"></i>
                    <i class="fa fa-youtube fa-1x d-inline" style="color: #ed302f;"></i>
                    <i class="fa fa-whatsapp fa-1x d-inline" style="color: #25d366;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>