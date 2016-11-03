<div class="row">
    <div class="alert alert-success text-center">
        <strong>Success</strong>
        Plan is verifed and uploaded successfully
    </div>
    <center>
    <div class="well">
    <?php $temp = $this->session->tempdata('application'); ?>
    <h4>Application-id:<strong><?=$temp[0]?></strong></h4>
    <h4>Password:<strong><?=$temp[1]?></strong></h4>
    </div>
    </center>
</div>
