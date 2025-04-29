<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h2>Form Pendaftaran</h2>
    
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color:green;"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <?= validation_errors('<p style="color:red;">', '</p>'); ?>
    </div>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url(). "auth/process_register";?>" method="POST">
            <div class="box-body">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
</div>
<div class="box-body">
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" class="form-control" name="password" id="password" placeholder="password" required>
</div>
<div class="box-body">
            <div class="form-group">
                <label for="konfirmasi">Konfirmasi password</label>
                <input type="text" class="form-control" name="confirm_password" id="confirm_password" placeholder="konfirmasi_password" required>
</div>
            <div class="form-group">
                <label for="role">role</label>
                <select class="form-control" name="role" required>
                  <option value="admin">admin</option>
                  <option value="user">user</option>
    </select><br>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
<div class="card-footer">
</div>
</div>
</section>
</div>