<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action='admin/login' method="post">
	@csrf
	<input type="text" name='username' placeholder="username">
	<br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" name="login">
</form>
</body>
</html>