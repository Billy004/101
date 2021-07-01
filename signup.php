<html>
<head>
<title>signup</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class ="signupbox">
    <img src="avatar.png" class="avatar">
    <h1>Sign Up </h1>
    <form action="connection.php" method="post" name="action" value="signup" >
        
        <p>Email</p>
        <input type="text" name ="email" placeholder="Enter Email" required/>
        <p> Password</p>
        <input type="password" name="password" placeholder="Enter Password" required/>
        
        <input type="submit" name="signup" value="SIGN UP">  
    </form>
</div>
</body>
</html>