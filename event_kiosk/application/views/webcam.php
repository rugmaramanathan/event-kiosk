<style>
  #my_camera video{
    width:100% !important;
  }
</style> 
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="my_camera" class="border border-primary"></div>
      <br />
      <input type="hidden" name="image" class="image-tag" id="user_img">
    </div>
    <div class="col-md-3">
      <div id="results" style="border:1px;width:200px"></div>
    </div>
  </div>
  <div class="text-center">
    <i class="fa fa-solid fa-camera fa-2x"  onClick="take_snapshot()"></i>
  </div>
  <button id="photo_submit" type="button" class="btn btn-primary btn-block mb-3">Next</button>
</div>
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
  $(document).ready(function () {
    Webcam.set({
      width: 400,
      height: 390,
      image_format: 'jpeg',
      jpeg_quality: 90
    });
    Webcam.attach('#my_camera');
  });
  function take_snapshot() {
    Webcam.snap(function (data_uri) {
      $(".image-tag").val(data_uri);
      document.getElementById('results').innerHTML = '<img  style="width:100% !important" src="' + data_uri + '"/>';
    });
  }

</script>