<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ubah Data</title>
  </head>
  <body>

    <?php echo form_open('home/update_proses') ?>

    <?php echo validation_errors(); ?>
    <br>
      <input type="hidden" name="id" value="<?php echo $siswa->id ?>">
      <?php echo form_hidden($id, $siswa->id) ?>
      <label>Nama Siswa</label><br>
      <?php echo form_input($nama_siswa, $siswa->nama) ?>
      <br><br>

      <label>Jenis Kelamin</label><br>
      <?php echo form_dropdown('', $pilihan, $siswa->jk, $jk) ?>
      <br><br>

      <label>Nama Ayah</label><br>
      <?php echo form_input($nama_ayah, $siswa->nama_ayah) ?>
      <br><br>

      <label>Nama Ibu</label><br>
      <?php echo form_input($nama_ibu, $siswa->nama_ibu) ?>
      <br><br>

      <label>Alamat</label><br>
      <?php echo form_textarea($alamat, $siswa->alamat) ?>
      <br><br>

      <input type="submit" name="submit" value="Submit">

    <?php echo form_close() ?>

  </body>
</html>
