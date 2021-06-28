<?php 


if(isset($_POST['passno'])){


    include("connection.php");

if($con === false){

echo "cannot conect";

}



$pno=$_POST['passno'];
$ftname= $_POST['ftname'];
$mdname=$_POST['mdname'];
$ltname= $_POST['ltname'];
$dob=$_POST['dob'];
$nation=$_POST['nation'];
$address=$_POST['address'];
$selected_radio= $_POST['gender'];
$pic = $_POST['file'];

$sql = "UPDATE `details` SET `pno`='$pno',`fname`='$ftname',`mname`='$mdname',`lname`='$ltname',`dob`='$dob',`nationality`='$nation',
`address`='$address',`gender`='$selected_radio',`img`='$pic' WHERE pno='$pno'";


if ( $con->query($sql)== TRUE  &&  $con->affected_rows > 0 ) {

echo " <h4> Succesfully updated!</h4>";

}else{

echo  "<h2>Error:</h2>" . $sql  .  "<br>"  . "<h4>NO match found for passport number-" .  $pno  .  $con->error;

}


}

?>






<html>
<head>
<title>update</title>

</head>
<body>

<div class="container">



<form action=""  method="post">

<table cellpadding="4" width="50%" bgcolor="wheat" align="center" cellspacing="2" border="3"> 
                    <tr>
                        
                        <td colspan="2"><center><h1><u>UPDATE PASSPORT FORM</u></h1></center></td>
                    </tr>
                    <tr>
                            <td><label for="name"> Enter passport number:</label></td>
                            <td><input type="text" class="form-control"  name="passno" required></td>
                    </tr>
                    <tr>
                        <td>  <label>Name:</label></td>
                        <td> <input type="text" class="form-control" placeholder="First name" name="ftname" required>
                            <input type="text" class="form-control" placeholder="Middle name" name="mdname">
                            <input type="text" class="form-control" placeholder="Last name" name="ltname" ></td>
                    </tr>

                    <tr>
                            <td><label > date of Birth:</label></td>
                            <td><input type="date" class="form-control"  name="dob" required></td>
                    </tr>

                    

                    <tr>
                            <td><label for="name"> Nationality:</label></td>
                            <td><input type="text" class="form-control"  name="nation" required></td>
                    </tr>

                    <tr>
                            <td><label for="comments"> Address:</label></td>
                            <td><textarea class="form-control" type="textarea" name="address"  placeholder="Address" maxlength="6000" rows="4"></textarea></td>
                    </tr>  
                    <tr>
                            <td><label > Gender:</label></td>
                           <td> <input type="radio" class="form-control"  name="gender" value="male" >Male
                            <input type="radio" class="form-control"  name="gender" value="female" >Female</td>
                    </tr>

                    <tr>
                        <td><label>Upload Image</label></td>
                        
                        <td><input type="file" name="file"  class="form-control ggg input-lg" ></td>
                                                
                    </tr>

<tr>
<th  colspan="2"><button class="btn btn-primary"><input type="submit" name="submit" value = "Update"></a></button>

<button type="submit"><a href="assignq4.php"  class="btn btn-warning">Back</a></button>

</tr>

</table>

<br>



</form>

</div>



</body>
</html>