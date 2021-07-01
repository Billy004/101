<html>
<head>
<title>loginform</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class ="loginbox">
    <img src="avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form action="connection.php" method="post" name="action" value="login" type="hidden" autocomplete="off">
        <p>Username</p>
        <input type="email" name="email" placeholder="Enter Email">
        <p> Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="submit" value="LOGIN">
        <a href="#"> Forgot password?</a>
        <a href="#"> Sign up</a>
    </form>
</div>
</body>
</html>