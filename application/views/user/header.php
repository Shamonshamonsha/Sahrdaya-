<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MIR Realtors</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/non-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?=$this->session->userdata('user')->application_id.'/'.$this->session->userdata('user')->name?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
        <li class="<?php if($page=='user-home')echo 'active';?>"><a href="<?=base_url()?>user/view/">Home</a></li>
        <li class="<?php if($page=='user-appreply')echo 'active';?>"><a href="<?=base_url()?>user/view/user-appreply">Payment</a></li>
        <li class="<?php if($page=='user-viewapplication')echo 'active';?>"><a href="<?=base_url()?>user/view/user-viewapplication">View Application</a></li>
        <li class="<?php if($page=='user-appstatus')echo 'active';?>"><a href="<?=base_url()?>user/view/user-appstatus">Remarks</a></li>
        <?php if($status) {?>
          <li class="<?php if($page=='user-editdocs')echo 'active';?>"><a href="<?=base_url()?>user/view/user-editdocs">Edit Docs</a></li>
          <li class="<?php if($page=='user-edit-data')echo 'active';?>"><a href="<?=base_url()?>user/view/user-edit-data">Edit Data</a></li>
        <?php }?>
        <li class=""><a href="<?=base_url()?>dashboard/logout">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<?php
function get_currentclass($group,$page)
{
  switch ($group)
  {
    case 'group':
      $page_array = array('create-group','manage-group');
          break;
    case 'user':
      $page_array = array('view-all-users','view-verified-users','add-user-groups');
      break;
    case 'enqui':
      $page_array = array('view-complaints','view-package-requests');
      break;
  }
  if(in_array($page,$page_array))
  {
    return 'active';
  }
}
?>