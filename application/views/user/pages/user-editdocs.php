<div class="row">
    <form action="<?=base_url().'user/edit_doc'?>" class="form-horizontal" method="post" action="">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Select Document Type</label>
        <div class="col-sm-10">
            <select  name="type" class="form-control"  required>
                <option value="deed">Land Original Deed copy</option>
                <option value="taxrecipt">Latest tax recipt</option>
                <option value="possession">Possession certificate</option>
                <option value="encumbrance">Encumbrance Certificate</option>
                <option value="noc">NOC & Affidavit</option>
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