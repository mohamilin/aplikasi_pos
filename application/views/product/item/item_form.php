<section class="content-header">
      <h1>
        Data item
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header"> 
            <h3 class="box-tittle"><?=ucfirst($page)?> item</h3>
            <div class="pull-right">
              <a href="<?=site_url('item')?>" class="btn btn-primary btn-flat">   
              <i class="fa fa-undo"></i> Kembali
              </a>
            </div>
        </div>    
    <div>
        <div class="box-body ">
            <div class="row">
                <div class="col-md-4">
                 <?php //echo validation_errors(); ?>
                 <form action="<?=site_url('item/process')?>" method="post">
                    <div class="form-group">
                        <label>Barcode</label>
                        <input type="hidden" name="id" value="<?=$row->item_id?>">
                        <input type="text" name="barcode" value="<?=$row->barcode?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Nama Produk</label>
                        <input type="text" name="product_name" id="product_name" value="<?=$row->name?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="category" class="form-control">
                            <option value="">- Pilih -</option>
                            <?php foreach ($category->result() as $key => $data) { ?>
                                <option value="<?=$data->category_id?>"><?=$data->name?></option>
                            <?php } ?>
                        </select>
                        <div class="form-group">
                        <label>Unit</label>
                        <select name="unit" class="form-control">
                            <option value="">- Pilih -</option>
                            <?php foreach ($unit->result() as $key => $data) { ?>
                                <option value="<?=$data->unit_id?>"><?=$data->name?></option>
                            <?php } ?>
                        </select>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="price" value="<?=$row->price?>" class="form-control" required>
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