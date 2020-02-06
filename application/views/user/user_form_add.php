<section class="content-header">
      <h1>
        Tambah Data Pengguna
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
                        <input type="text" name="name" value="<?=set_value('name')?>" class="form-control">
                    <span class="help-block"><?=form_error('name')?></span>
                    </div>
                    <div class="form-group <?=form_error('user_name') ? 'has-error' : null?>">
                        <label>Username</label>
                        <input type="text" name="user_name" value="<?=set_value('user_name')?>" class="form-control">
                        <span class="help-block"><?=form_error('user_name')?></span>
                    </div> 
                    <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                        <label>Password</label>
                        <input type="text" name="password" value="<?=set_value('password')?>" class="form-control">
                        <span class="help-block"><?=form_error('password')?></span>
                    </div>
                    <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                        <label>Konfirmasi Password</label>
                        <input type="text" name="passconf" value="<?=set_value('passconf')?>"  class="form-control">
                        <span class="help-block"><?=form_error('passconf')?></span>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" class="form-control"><?=set_value('address')?></textarea>
                        <?=form_error('address')?>
                    </div>
                    <div class="form-group <?=form_error('level') ? 'has-error' : null?>">
                        <label>Level</label>
                        <select name="level" class="form-control">
                            <option value="">- Pilih -</option>
                            <option value="1" value="1" <?=set_value('level') == 2 ? "selected" : null?>>Admin</option>
                            <option value="2" <?=set_value('level') == 2 ? "selected" : null?>>Kasir</option>
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