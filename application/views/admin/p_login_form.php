<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BeraniBerencana - Restricted area</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>res/img/webicon.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/css/bootstrap.css">	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
<style type="text/css">
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
    margin-top: 85px;    
}
.profile-img
{
    width: 207px;
    height: 179px;
    margin: 0 auto 10px;
    display: block;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
</style>

</head>
<body>
	<div class="container">
        <!--<h1 class="text-center login-title">Please sign in to enter Dashboard</h1>-->            
        <form class="form-signin" method="post" action="<?php echo site_url('ctrladmin/user_login'); ?>">
            <?php
                $success_msg= $this->session->flashdata('success_msg');
                $error_msg= $this->session->flashdata('error_msg');

                if($success_msg){
            ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo $success_msg; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>  
            <?php
                }
                if($error_msg){
            ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?php echo $error_msg; ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>                    
            <?php
                }
            ?>
            <img class="profile-img" src="<?php echo base_url('res/img/logo.png'); ?>" alt="">
            <div class="form-group">
                <label for="username">Username </label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password </label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="password">
            </div>
            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
        </form>
    </div>    
</body>
</html>