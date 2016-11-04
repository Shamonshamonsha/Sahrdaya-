<div class="row">
    <?php if($this->session->flashdata('server_msg')!== NULL): ?>
        <?php $display =$this->session->flashdata('server_msg') ?>
        <div class="alert alert-<?=$display['class']; ?> text-center">
            <strong><?=$display['title']; ?></strong>
            <?=$display['msg']; ?>
        </div>
    <?php endif;?>
    <form action="<?=base_url().'user/edit_doc'?>" class="form-horizontal" enctype="multipart/form-data" method="post" action="">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Select Document Type</label>
        <div class="col-sm-10">
            <select  name="type" class="form-control"  required>
                <option value="deedcopy">Land Original Deed copy</option>
                <option value="tax_recipt">Latest tax recipt</option>
                <option value="pes_certificate">Possession certificate</option>
                <option value="encumb_cer">Encumbrance Certificate</option>
                <option value="noc_cer">NOC & Affidavit</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Encumbrance Certificate*</label>
        <div class="col-sm-10">
            <input type="file" name="edit-doc" class="form-control" id="email" placeholder="" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Upload</button>
        </div>
    </div>
  </form>
</div>