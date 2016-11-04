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
<div class="jumbotron text-center">
    <h1>SAHRDAYA</h1>
    <p>Building plan permit approval system</p>
</div>
<div class="container">
    <div class="row">

        <div class="col-sm-12">
            <h3>Applicant login</h3>
            <hr/>
            <?php if($this->session->flashdata('login_error')!== NULL): ?>
                <div class="alert alert-danger text-center">
                    <strong>Error</strong>
                    <?=$this->session->flashdata('login_error'); ?>
                </div>
            <?php endif;?>
            <form class="form-horizontal" method="post" action="<?=base_url().'home/login_action'?>">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Application Id:</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="email" placeholder="Enter applicationID">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
</body>
</html>