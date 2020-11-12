<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1 class="tittle-dashboard">Laman Profile</h1>

<div class="row">
  <div class="col-sm-6 ">
    <img src="/img/default.jpg" class="align-self-start mr-3 profile-img-dashboard rounded-circle mx-auto d-block" alt="...">
    <h3 class="text-center mt-3 mb-3">Halo, <?= $name; ?>!</h3>
  </div>
</div>

<h4>Profil lengkap</h4>
<div class="row">
  <div class="col-sm-6">
    <table class="table table-borderless mb-4">
      <tbody>
        <tr>
          <td>Kode Identitas</td>
          <td><?= $id; ?></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td><?= $name; ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><?= $gender; ?></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td><?= $ttl; ?></td>
        </tr>
        <tr>
          <td>Alamat email</td>
          <td><?= $email; ?></td>
        </tr>
        <tr>
          <td>Alamat lengkap</td>
          <td><?= $address; ?></td>
        </tr>

      </tbody>
    </table>
  </div>
</div>




<h4>Ganti password</h4>
<div class="row">
  <div class="col-sm-6">
    <form>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-4 col-form-label">Password Lama</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputPassword3">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-4 col-form-label">Password Baru</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputPassword3">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-4 col-form-label">Ulangi Password Baru</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputPassword3">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-materi">Ubah password</button>
        </div>
      </div>
    </form>
  </div>
</div>


<?= $this->endSection(); ?>