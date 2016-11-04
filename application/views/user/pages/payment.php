<?php 
$user = $this->session->userdata('user');
$total = $this->session->userdata('amount');
?>
<body onload="document.payment.submit()">
<form name="payment" action="<?php echo $form[3]; ?>"  method="post" id="payment">
    <input type="hidden" name="key" value="<?php echo $form[1]; ?>" />
    <input type="hidden" name="txnid" value="<?php echo $form[0]; ?>" />
    <input type="hidden" name="hash" value="<?php echo $form[2]; ?>"/>
     <input type="hidden" name="amount" value="<?php echo $total; ?>">
     <input type="hidden" name="productinfo" value="<?php echo $form[4]; ?>" />
    <input type="hidden" name="firstname" value="<?php echo $user->applicant_name; ?>" />
    <input type="hidden" name="email" value="<?php echo $user->email; ?>" />
    <input type="hidden" name="phone" value="<?php echo $user->mobile_number ?>" />
    <input type="hidden" name="surl" value="<?php echo base_url();?>user/payment_success" />
    <input type="hidden" name="furl" value="<?php echo base_url();?>user/payment_error" />
    <input type="hidden" name="service_provider" value="payu_paisa" />
</form>
</body>
<script>
    </script>