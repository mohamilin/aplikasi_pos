

<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> SUKSES !!!</h4>
        <?=$this->session->flashdata('success'); ?>
    </div>
   
<?php } ?>
