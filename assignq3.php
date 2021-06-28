
<html>
<head><title>Session</title>
</head>

<body>
<form method="post" action="">
<label>User Name</label>
<input type="text" name="name"placeholder="your name" required><br>
<label> Password</label>
<input type="text" name="password"placeholder="enter password" required><br><br>
<button type="submit" name="login">Login</button>
<button type="submit" name="logout">Logout</button>

</form>

</body>

</html>


<?php

session_start();


if(isset($_POST["login"]))
{
    if(($_SESSION['username']==$_POST['name'])&&($_SESSION['password']==$_POST['password']))
    {
        echo "<br>welcome back ";
        echo $_SESSION['username'];
	
	
	
    }
    else
    {
        $_SESSION['username']=$_POST['name'];
        $_SESSION['password']=$_POST['password'];
        echo $_SESSION['username'];
        echo "<br>This is your first visit<br>";
	
	
    }
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
echo"<br>Number Of time visited: ".$_SESSION['views']."<br>";
    
      


}
if(isset($_POST["logout"]))
{
SESSION_unset();
echo "<br>logged out ";
echo $_SESSION['username']=$_POST['name']."....<br>";
}


?>