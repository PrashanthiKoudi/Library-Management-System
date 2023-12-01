<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <style>
    body {
        background-image: url('images/signin.gif');
        background-repeat: no-repeat;
        resize: none;
        position: relative;
        min-height: 97vh;
        background-size: 100% 100%;
    }

    .login-container {
        display: flex;
        flex-direction: column; /* Change to column */
        align-items: flex-start; /* Align items to the start */
    }

    .login-form-1,
    .login-form-3 {
        flex: 1;
        padding: 3%; /* Adjust the padding */
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        margin: 20px;
        width: 30%; /* Adjust the width */
    }

    .login-form-1 h3,
    .login-form-3 h3, .btnSubmit {
        text-align: center;
        color: white;
        background-color: darkblue;
    }

    .login-form-1 .btnSubmit,
    .login-form-3 .btnSubmit {
        font-weight: 600;
        color: white;
        background-color: darkblue;
    }

    /* Position the forms at the top right and bottom left corners */
    .login-form-1 {
        align-self: flex-end;
    }

    .login-form-3 {
        align-self: flex-start;
    }


    .top-left-quote {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 2%; /* Match the padding of login forms */
        width: 30%; /* Match the width of login forms */
        color:darkblue;
        background:white;
    }

    .top-left-quote p {
        margin: 0;
        font-size: 16px; /* Adjust font size as needed */
        color:darkblue;
    }

</style>


</head>
<body>

<?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";

 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }
?>

<div class="container login-container">
    <div class="row"><h4><?php echo $msg?></h4></div>
    <div class="login-form-1">
        <form action="login_server_page.php" method="get">
            <fieldset>
                <h3>Student Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="login_email" placeholder="Email *" value="" />
                </div>
                <label style="color:red"><?php echo $emailmsg?></label>
                <div class="form-group">
                    <input type="password" class="form-control" name="login_pasword"  placeholder="Password *" value="" />
                </div>
                <label style="color:red"><?php echo $pasdmsg?></label>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
            </fieldset>
        </form>
    </div>

    <div class="login-form-3">
        <form action="loginadmin_server_page.php" method="get">
            <fieldset>
                <h3>Admin Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="login_email" placeholder="Email *" value="" />
                </div>
                <label style="color:red"><?php echo $ademailmsg?></label>
                <div class="form-group">
                    <input type="password" class="form-control" name="login_pasword"  placeholder="Password *" value="" />
                </div>
                <label style="color:red"><?php echo $adpasdmsg?></label>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
            </fieldset>
        </form>
    </div>
</div>

<script src="" async defer></script>

<div class="top-left-quote">
    <p>"Everything you need for a better future and success has already been written. And guess what? All you have to do is explore this website."</p>
</div>
</body>
</html>
