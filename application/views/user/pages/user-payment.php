<div class="row">
    <?php if(!empty($payment)){ ?>
    <div class="alert alert-success text-center">
        <strong>Application Approved</strong>
         <br>
         Your Application is approved ,pay the following amount to download the
        certificate
        <br>
        <strong>Amount: RS: <?=$payment->amount_topay?>/</strong>
        <strong>
    </div>
    <center>
    <button type="submit" class="btn btn-primary">Payonline</button>
    </center>
    <?php }else {

        echo '<center><h4>when application is approved payment button is appeard here</h4></center>';
    }
    echo $this->session->userdata('user')->id
        ?>

</div>
