<div class="row">
    <?php if($this->session->flashdata('server_msg')!== NULL): ?>
        <?php $display =$this->session->flashdata('server_msg') ?>
        <div class="alert alert-<?=$display['class']; ?> text-center">
            <strong><?=$display['title']; ?></strong>
            <?=$display['msg']; ?>
        </div>
    <?php endif;?>
    <?php
    if(empty($app_status)){
        echo '<p style="font-weight: bold" class="text-center text-info">Your application is pending with building inspector</p>';
    }
    foreach ($app_status as $value){
    ?>
    <div class="alert alert-warning">
        Message:<?=$value->content?>
        <br>
        Posted_by:<strong><?=$value->added_by?></strong>
        <?php if(!empty($value->name)) {?>
            <br>
            Officer Name:<strong><?=$value->name?></strong>
        <?php } ?>
        <br>
        Posted On:<strong><?=date('d-M-y',$value->time_stamp)?></strong>
    </div>
    <?php }?>
</div>
<?php if(!empty($app_status)){ ?>
<div class="row">
    <div class="form-group">
        <form class="form-horizontal" action="<?=base_url()?>user/add_userreply" method="post">
            <label class="control-label col-sm-2" for="email">Reply:</label>
            <div class="col-sm-10">
                <input type="hidden" name="id" value="<?=$this->session->userdata('user')->id?>">
                <textarea name="remarks" class="form-control" id="email" placeholder="" ></textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>
<?php }?>
