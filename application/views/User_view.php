<?php $username = "Bambang"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peserta PilKaDa RT 212</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <h2><a href="<?php echo base_url(); ?>">Data <small>Peserta Pencoblosan</small></a></h2>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add new</button>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KTP</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>QR Code</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data->result() as $row) :?>
          <tr>
            <td style="vertical-align: middle;"><?php echo $row->ktp; ?></td>
            <td style="vertical-align: middle;"><?php echo $row->nama; ?></td>
            <td style="vertical-align: middle;"><?php echo $row->nomor_hp; ?></td>
            <td><img style="width: 100px;" src="<?php echo base_url().'assets/images/'.$row->qr_code; ?>"></td>
            <td>
              <a href="<?php echo 'https://api.whatsapp.com/send?phone='.$row->nomor_hp.'&text=Bro n Sis warga tercinta ini ketua RT '.$username.'.%0A Kuy dateng nyoblos besok, jangan lupa tunjukin QR Code-nya: '.base_url().'assets/images/'.$row->qr_code;  ?>" target="_blank">
                Kirim QR Code via Whatsapp
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- modal -->
  <form action="<?php echo base_url().'index.php/user/save' ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-label="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add new User</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="ktp" class="control-label">KTP:</label>
              <input type="text" name="ktp" class="form-control" id="ktp">
            </div>
            <div class="form-group">
              <label for="nama" class="control-label">Nama:</label>
              <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="nomor_hp" class="control-label">Nomor HP:</label>
              <input type="text" name="nomor_hp" class="form-control" id="nomor_hp">
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