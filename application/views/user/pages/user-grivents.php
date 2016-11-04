<div class="row">
    <hr/>
    <?php if($this->session->flashdata('server_msg')!== NULL): ?>
        <?php $display =$this->session->flashdata('server_msg') ?>
        <div class="alert alert-<?=$display['class']; ?> text-center">
            <strong><?=$display['title']; ?></strong>
            <?=$display['msg']; ?>
        </div>
    <?php endif;?>
    <?php
    foreach ($complaints as $value){
        ?>
        <div class="alert alert-warning">
            Message:<?=$value->complaint?>
            <br>
             Name:<strong><?=$value->name?></strong>
            <br>
            Posted On:<strong><?=date('d-M-y',$value->time_stamp)?></strong>
        </div>
    <?php }?>
</div>
<div class="row">
    <div class="form-group">
        <form class="form-horizontal" action="<?=base_url()?>common/add_complaint" method="post">
            <label class="control-label col-sm-2" for="email">Enter your complaint</label>
            <div class="col-sm-10">
                <input type="hidden" name="id" value="<?=$this->session->userdata('user')->id?>">
                <textarea name="complaints" class="form-control" id="email" placeholder="" ></textarea>
                <br>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>