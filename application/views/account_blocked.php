<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!DOCTYPE html>
<!-- Account_blocked page will show in user's email that will be sent if account is blocked. -->
<html>
<head>
	<title>Account Blocked</title>
</head>
<body>
	<h1>Account Blocked</h1>
	<!-- Goes to unblock_login page when 'here' is clicked from email -->
	<em>Someone is trying to access your account. To unblock your account, click <a href="<?php echo base_url('Account_login/unblock_login'); ?>">here</a></em>
</body>
</html>