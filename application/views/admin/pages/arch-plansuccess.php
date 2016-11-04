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
     <?php

      $msg = 'userId:'.$temp[0].'%0a';
      $msg.='password:'.$temp[1];
     send_sms($temp[2],$msg);
     function send_sms($number,$message)
     {
         // $number = '7736527089';
         //$message ='testsms';
         $var="user=spotmyticket&pass=albin123&sender=SPOTMT&phone=$number&text=$message&priority=ndnd&stype=normal";
         $url='http://trans.smsfresh.co/api/sendmsg.php?'.$var;
         $curl=curl_init($url);
         curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
         curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
         $response=curl_exec($curl);
         curl_close($curl);
         print_r($response);
     }
     ?>
    </div>
    </center>
</div>
