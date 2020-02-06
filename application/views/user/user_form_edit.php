<section class="content-header">
      <h1>
        Data Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Pengguna</h3>
            <div class="pull-right">
              <a href="<?=site_url('user')?>" class="btn btn-primary btn-flat">           
              <i class="fa fa-undo"></i> Kembali
              </a>
            </div>
        </div>    
    <div>
        <div class="box-body ">
            <div class="row">
                <div class="col-md-4">
                 <?php //echo validation_errors(); ?>
                 <form action="" method="post">
                    <div class="form-group <?=form_error('name') ? 'has-error' : null?>">
                        <label>Nama</label>
                        <input type="hidden" name="user_id" value="<?=$row->user_id?>">
                        <input type="text" name="name" value="<?=$this->input->post('name') ?? $row->name ?>" class="form-control">
                    <span class="help-block"><?=form_error('name')?></span>
                    </div>
                    <div class="form-group <?=form_error('user_name') ? 'has-error' : null?>">
                        <label>Username</label>
                        <input type="text" name="user_name" value="<?=$this->input->post('user_name') ?? $row->user_name ?>" class="form-control">
                        <span class="help-block"><?=form_error('user_name')?></span>
                    </div> 
                    <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                        <label>Password</label> <small>*Biarkan kosong, jika tidak diganti</small>
                        <input type="text" name="password" value="<?=$this->input->post('password') ?>" class="form-control">
                        <span class="help-block"><?=form_error('password')?></span>
                    </div>
                    <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                        <label>Konfirmasi Password</label>
                        <input type="text" name="passconf" value="<?=$this->input->post('name') ?>"  class="form-control">
                        <span class="help-block"><?=form_error('passconf')?></span>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" class="form-control"><?=$this->input->post('address') ?? $row->address ?></textarea>
                        <?=form_error('address')?>
                    </div>
                    <div class="form-group <?=form_error('level') ? 'has-error' : null?>">
                        <label>Level</label>
                        <select name="level" class="form-control">
                            <?php $level = $this->input->post('level') ? : $row->level ?>
                            <option value="1">Admin</option>
                            <option value="2" <?=$level == 2 ? 'selected' : null?> >Kasir</option>
                        </select>
                        <span class="help-block"><?=form_error('level')?></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-flat">Reset</button>
                    </div>
                 </form>
                </div>
            </div>             
        </div>
    </div>
</section>