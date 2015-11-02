<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Admin Panel Framework</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="jscss/css.css" />
	<link rel="shortcut icon" href="images/favicon.png">
	<script type="text/javascript" src="jscss/keyboard.js" charset="UTF-8"></script>
	<link rel="stylesheet" type="text/css" href="jscss/keyboard.css">
	<script type="text/javascript" src="captcha/jquery/jquery.js"></script>
	<script type="text/javascript" src="captcha/jquery/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="captcha/jquery/QapTcha.jquery.css" media="screen" />
	<script type="text/javascript" src="captcha/jquery/jquery.ui.touch.js"></script>
	<script type="text/javascript" src="captcha/jquery/QapTcha.jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.QapTcha').QapTcha({disabledSubmit:false,autoRevert:true,autoSubmit:true,txtLock:"Login locked. Drag to Login",txtUnlock:"Login unlocked"});
			});
	</script>
</head>

<body>
	<form action="" method="post" id="_loginForm">
		<h1><?php echo lang::translate('_site_title_') ?></h1>
		<?php if(user::$error) { ?><p class="_error"><?php echo user::$error ?></p><?php } ?>
		<p><input type="text" name="username" id="username" required="required" placeholder="<?php echo lang::translate('username') ?>" autocomplete="off" class="tf keyboardInput" /></p>
		<p><input type="password" name="password" id="password" required="required" placeholder="<?php echo lang::translate('password') ?>" class="tf keyboardInput" /></p>
		<p><input type="submit" name="submit" id="submit" class="submit" value="<?php echo lang::translate('login') ?>" /></p>
		<!--div class="QapTcha"></div-->
	</form>
</body>
</html>