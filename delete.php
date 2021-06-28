<html>
<head><title>add</title></head>
<body>

<div >
                
                    
                <form action="" method="POST" enctype="multipart/form-data">
                <table cellpadding="4" width="50%" bgcolor="wheat" align="center" cellspacing="2" border="3"> 
                    <tr>
                        
                        <td colspan="2"><center><h1><u> Delete Record From Database</u></h1></center></td>
                    </tr>
                    <tr>
                            <td><label for="name"> Enter Passport number:</label></td>
                            <td><input type="text" class="form-control"  name="passno" required></td>
                    </tr>
                    <tr><td colspan="2"><center>
                    <button type="submit" class="btn btn-lg btn-warning btn-block" value="delete" name="delete" >DELETE</button>
                    <button class="btn btn-warning btn-lg"><a href="assignq4.php">BACK</a></button>
                    </td></tr>
                </table>
                </form>
</div>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['delete']))
{
$pno=$_POST['passno'];

$sql = mysqli_query($con, "DELETE FROM `details` WHERE pno = '$pno'") or die(mysqli_error($con));
if($sql)
{
					
    echo " <h4>deleted Succesfully....</h4>";
}
                
            
}