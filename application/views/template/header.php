<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="position"> 
    <a class="navbar-brand" href="#">Reservation</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">test</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php if($this->session->userdata("level")=='0'){ ?>
        <a class="nav-item nav-link active ml-auto" href="<?php echo base_url('user/user')?>">Home<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?php echo base_url('registrasi')?>">Registrasi</a>
        <a class="nav-item nav-link" href="<?php echo base_url('informasi')?>">Informasi</a>
      <?php } ?>
      <?php if($this->session->userdata("level") == '1'){?>
        <a class="nav-item nav-link active ml-auto" href="<?php echo base_url('admin')?>">User<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?php echo base_url('admin/rumah_sakit')?>">Rumah Sakit</a>
        <a class="nav-item nav-link" href="<?php echo base_url('admin/poli')?>">Poli</a>
        <a class="nav-item nav-link" href="<?php echo base_url('admin/antrean')?>">Antrean</a>
      <?php } ?>
      <a class="nav-item nav-link" href="<?php echo base_url('login/logout'); ?>">Logout</a>
    </div>
  </div>
</nav>
