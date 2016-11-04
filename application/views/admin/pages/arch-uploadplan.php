<div class="row">
    <h3>Submit new Application</h3>
    <br>
    <?php if($this->session->flashdata('server_msg')!== NULL): ?>
        <?php $display =$this->session->flashdata('server_msg') ?>
        <div class="alert alert-<?=$display['class']; ?> text-center">
            <strong><?=$display['title']; ?></strong>
            <?=$display['msg']; ?>
        </div>
    <?php endif;?>
    <form class="form-horizontal" method="post" action="<?=base_url()?>plan/add_newapplication" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Applicant Name:</label>
            <div class="col-sm-10">
                <input type="text" name="applicant_name" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Application Type:</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Mobile number:</label>
            <div class="col-sm-10">
                <input type="text" name="mobile_number" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">City:</label>
            <div class="col-sm-10">
                <input type="text" name="city" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Gender:</label>
            <div class="col-sm-10">
                <select  name="gender" class="form-control"  required>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Pincode:</label>
            <div class="col-sm-10">
                <input type="text" name="pincode" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Address:</label>
            <div class="col-sm-10">
                <input type="text" name="address" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">District:</label>
            <div class="col-sm-10">
                <input type="text" name="district" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Upload plan</label>
            <div class="col-sm-10">
                <input type="file" name="plan" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Localbody type</label>
            <div class="col-sm-10">
                <select class="form-control" name="localbody_type" required>
                    <option>Coperation</option>
                    <option>Muncipality</option>
                    <option>Panchayath</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Local body name</label>
            <div class="col-sm-10">
                <input type="text" name="localbody_name" class="form-control" id="email" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Ward:</label>
            <div class="col-sm-10">
                <input type="text" name="ward" class="form-control" id="pwd" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>