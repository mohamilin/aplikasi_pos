<section class="content-header">
      <h1>
        Data Supplier
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
            <h3 class="box-tittle"><?=ucfirst($page)?> Supplier</h3>
            <div class="pull-right">
              <a href="<?=site_url('supplier')?>" class="btn btn-primary btn-flat">   
              <i class="fa fa-undo"></i> Kembali
              </a>
            </div>
        </div>    
    <div>
        <div class="box-body ">
            <div class="row">
                <div class="col-md-4">
                 <?php //echo validation_errors(); ?>
                 <form action="<?=site_url('supplier/process')?>" method="post">
                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="hidden" name="id" value="<?=$row->supplier_id?>">
                        <input type="text" name="name" value="<?=$row->name?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" name="no_hp" value="<?=$row->no_hp?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea type="text" name="address" class="form-control" required><?=$row->address?></textarea >
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea type="text" name="description" class="form-control"><?=$row->description?></textarea >
                    </div>
                    <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-flat">Reset</button>
                    </div>
                 </form>
                </div>
            </div>             
        </div>
    </div>
</section>