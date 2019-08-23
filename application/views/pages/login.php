<!DOCTYPE html>
<html lang="en">
  
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?> </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url();?>assets/manifest.json">
    <link rel="mask-icon" href="<?php echo base_url();?>assets/safari-pinned-tab.svg" color="#f1595d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css089b.css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/elephant.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login-2.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
  </head>
  <body>
    <div class="login">
      <div class="login-body">
        <a class="login-brand" href="index.html">
          <img class="img-responsive" src="<?php echo base_url();?>assets/img/logo.svg" alt="Elephant">
        </a>
        <div class="login-form">
          <form action="<?php echo base_url();?>auth/login_check" method="post" data-toggle="validator">
            <div class="form-group">
              <label for="userID">User ID</label>
              <input id="userID" class="form-control" type="text" name="userID" spellcheck="false" autocomplete="off" data-msg-required="Please enter your userID." required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="password" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked="checked">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">Keep me signed in</span>
              </label>
              <span aria-hidden="true"> · </span>
              <a href="password-2.html">Forgot password?</a>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
      </div>

      <div id='err_msg' style='display: none'>  
                <div id='content_result'>  
                <div id='err_show' class="w3-text-red">  
                <div id='msg'> </div></label>  
                </div></div></div>  

      <div class="login-footer">
        Don't have an account? <a href="signup-2.html">Sign Up</a>
      </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/elephant.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','<?php echo base_url();?>assets/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>

</html>
