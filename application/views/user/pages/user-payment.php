<div class="row">
    <?php if(!empty($payment)) {
        $this->session->set_userdata('amount', $payment->amount_topay);
        if (!empty($payment->amount_topay && $payment->status != '1')) {
            ?>
            <div class="alert alert-success text-center">
                <strong>Application Approved</strong>
                <br>
                Your Application is approved ,pay the following amount to download the
                certificate
                <br>
                <strong>Amount: RS: <?= $payment->amount_topay ?>/</strong>
                <strong>
            </div>
            <center>
                <a href="<?php echo base_url() ?>user/payment" class="btn btn-primary">Payonline</a>
            </center>
        <?php } else if ($payment->status == '1') { ?>
            <div class="alert alert-success text-center">
                <strong>Payment Success</strong>
                <p>Transaction Id:<?=$payment->transaction_id;?></p>
                <br>
                <p>Amount:<?php $payment->amount_topay; ?>
                    <a target="_blank" href="<?php echo base_url() ?>uploads/pdf.pdf">Download certificate</a>
                    <strong>
            </div>
            <?php
        }
    }else  {
        echo '<center><h4>Your application is pending with the building inspector/overseer.Please wait till your application get approved by AE.Once verified the payment link will be available.</h4></center>';
    }    ?>

</div>
