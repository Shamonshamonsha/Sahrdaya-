<?php
if($app_status->status=='1'){
    $class = 'success';
    $message ='Application submitted waiting for approval';
}
?>
<div class="row">
    <div class="alert alert-<?=$class?> text-center">
     <?=$message?>
    </div>
</div>
