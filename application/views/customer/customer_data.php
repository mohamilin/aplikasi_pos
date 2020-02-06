<section class="content-header">
      <h1>
        Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">customer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header">
            <div class="pull-right">
              <a href="<?=site_url('customer/add')?>" class="btn btn-primary btn-flat">           
              <i class="fa fa-user-plus"></i>Tambah customer
              </a>
            </div>
        </div>    
    <div>
      

        <div class="box-body table-responsive">
              <table class="table table-bordered-striped" id="table1">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; 
                    foreach ($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td><?=$data->gender?></td>
                        <td><?=$data->phone?></td>
                        <td><?=$data->address?></td>
                        <td class="text-centre" width="160 px" >
                            <a href="<?=site_url('customer/edit/'.$data->customer_id)?>"class="badge bg-light-blue">
                            Update</a>
                            <a onclick = "return confirm('Apakah anda yakin ?')" href="<?=site_url('customer/del/'.$data->customer_id)?>" class="badge bg-red" >
                            Delete</a>
                            
                        </td>
                    </tr>
                       <?php }?>
                </tbody>
              </table>                 
        </div>
    </div>
</section>