<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemungutan Suara</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
  <script src="<?php echo base_url().'assets/js/qr_packed.js'?>"></script>
  
</head>
<body>
  <div id="container" style="padding: 0 auto; text-align: center;">
    <h1><a href="<?php echo base_url(); ?>">Pemungutan Suara</a></h1>

    <a id="btn-scan-qr">
      <div>Klik untuk scan QR Code</div>
      <img src="<?php echo base_url().'assets/images/icon/qr-icon.svg' ?>" width="100px">
    </a>

    <canvas hidden="" id="qr-canvas"></canvas>

    <div id="qr-result" style="padding-top: 24px;" hidden="">
    <!-- <div id="qr-result" style="padding-top: 24px;"> -->
      <form action="<?php echo base_url().'index.php/suara/present' ?>" method="post">
        <div class="form-group">
          <label for="ktp" class="control-label"><b>Nomor KTP Peserta:</b></label>
          <input type="text" name="ktp" class="form-control" id="outputData" value="" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Tandai Hadir. lanjut peserta berikutnya!</button>
      </form>
    </div>
  </div>

  <script src="<?php echo base_url().'assets/js/qrCodeScanner.js'?>"></script>
  <script>
    // var target = document.getElementById('outputData');
    
    // // create an observer instance
    // var observer = new MutationObserver(function(mutations) {
    //   mutations.forEach(function(mutation) {
    //     console.info("EVENT TRIGGERT " + mutation.target.id);
    //   });    
    // });
    
    // // configuration of the observer:
    // var config = { attributes: true, childList: true, characterData: true };
    
    // // pass in the target node, as well as the observer options
    // observer.observe(target, config);
    
    function handleOnChange(e) {
      
    }
  </script>
</body>
</html>