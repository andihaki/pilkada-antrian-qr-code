<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qr Code generator</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <h2><a href="<?php echo base_url(); ?>">Data <small>Qr code</small></a></h2>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add new</button>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>QR Code</th>
            <th>KTP</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data->result() as $row) :?>
          <tr>
            <td><img style="width: 100px;" src="<?php echo base_url().'assets/images/'.$row->qr_code; ?>"></td>
            <td style="vertical-align: middle;"><?php echo $row->ktp; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- modal -->
  <form action="<?php echo base_url().'index.php/qr_code/save' ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-label="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Add new QR Code</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="ktp" class="control-label">KTP:</label>
              <input type="text" name="ktp" class="form-control" id="ktp">
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>