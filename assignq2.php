<!DOCTYPE html>



<?php
$cookie_name = "user";
$cookie_value = $_POST['name'];

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>

<body>

<form method="post" action="">
<input type="text" name="name">
<button type="submit">submit</button>

</form>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
     date_default_timezone_set("Asia/kolkata"); 
 
//Calculate 60 days in the future
//seconds * minutes * hours * days + current time
 
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
echo "<br>Your last visit was - ". $visit;
}
else
echo "<br>You've got some stale cookies!";
}
?>

<?php

?>


<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>