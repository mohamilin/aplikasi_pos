<section class="content-header">
      <h1>
        Item Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header">
        <?php $this->view('messages')?>
            <div class="pull-right">
              <a href="<?=site_url('item/add')?>" class="btn btn-primary btn-flat">           
              <i class="fa fa-user-plus"></i>Tambah Item
              </a>
            </div>
        </div>    
    <div>
      

        <div class="box-body table-responsive">
              <table class="table table-bordered-striped" id="table1">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Barcode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; 
                    foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->barcode?></td>
                        <td><?=$data->name?></td>
                        <td><?=$data->price?></td>
                        <td class="text-centre" width="160 px" >
                            <a href="<?=site_url('item/edit/'.$data->item_id)?>"class="badge bg-light-blue">
                            Update</a>
                            <a onclick = "return confirm('Apakah anda yakin ?')" href="<?=site_url('item/del/'.$data->item_id)?>" class="badge bg-red" >
                            Delete</a>
                            
                        </td>
                    </tr>
                       <?php }?>
                </tbody>
              </table>                 
        </div>
    </div>
</section>