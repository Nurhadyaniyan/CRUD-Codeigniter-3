<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
  </head>
  <body>

    <?php echo form_open('home/create_proses') ?>

    <?php echo validation_errors(); ?>
    <br>

      <label>Nama Siswa</label><br>
      <?php echo form_input($nama_siswa) ?>
      <br><br>
      <label>Jenis Kelamin</label><br>
      <?php echo form_dropdown('', $pilihan, '', $jk) ?>
      <br><br>
      <label>Nama Ayah</label><br>
      <?php echo form_input($nama_ayah) ?>
      <br><br>
      <label>Nama Ibu</label><br>
      <?php echo form_input($nama_ibu) ?>
      <br><br>
      <label>Alamat</label><br>
      <?php echo form_textarea($alamat) ?>
      <br>
      <input type="submit" name="submit" value="Submit">

    <?php echo form_close() ?>

  </body>
</html>
