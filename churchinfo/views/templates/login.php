<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css" >
    <title>ChurchInfo: Login</title>
</head>
<body>


<?php if(!empty($error)):?>
<p class="error">dd<?php $error;?></p>
<?php endif;?>





<?php if(!empty($urlRedirect)):?>

<?php endif;?>

<div class="container">
    <!-- <form class="form-signin" role="form" method="post" name="LoginForm"  action="Default.php?Proto=http&amp;Path=demo2.churchwebcrm.com" > -->
	  <form class="form-signin" role="form" method="post" name="LoginForm"  action="/login" >
	
        <h2 class="form-signin-heading">Please Login</h2>
                <label for="inputEmail" class="sr-only">Enter your user name:</label>
        <input type="text" id="UserBox" class="form-control" name="email" size="10" placeholder="Enter your user name:" required autofocus>
        <label for="inputPassword" class="sr-only">Enter your password:</label>
        <input type="password" id="PasswordBox" class="form-control" name="password" size="10" placeholder="Enter your password:" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <!-- <input type="hidden" name="sURLPath" value="http://demo2.churchwebcrm.com"> -->
    </form>

</div> <!-- /container -->

<script language="JavaScript" type="text/JavaScript">
    document.LoginForm.User.focus();
</script>

</body>
</html>

