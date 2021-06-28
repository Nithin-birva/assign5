

<html>
<head><title>add</title></head>
<body>

<div >
                
                    
                <form action="" method="POST" enctype="multipart/form-data">
                <table cellpadding="4" width="50%" bgcolor="wheat" align="center" cellspacing="2" border="3"> 
                    <tr>
                        
                        <td colspan="2"><center><h1><u> PASSPORT FORM</u></h1></center></td>
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
                            <input type="radio" class="form-control"  name="gender" value="female" >Female
                            <input type="radio" class="form-control"  name="gender" value="other" >Other</td>
                    </tr>

                    <tr>
                        <td><label>Upload Image</label></td>
                        
                        <td><input type="file" name="file"  class="form-control ggg input-lg" required></td>
                                                
                    </tr>

                
                    
                   <tr>
                            
                            <td colspan="2"><center><button type="submit" class="btn btn-lg btn-warning btn-block" value="<?php echo (isset($update)?'UPDATE':'Save'); ?>" name="add" >SAVE</button>
                            <input type="reset"><button class="btn btn-warning btn-lg"><a href="assignq4.php">BACK</a></button></center></td>
                    </tr>
                    </table>
                </form>
            
                
            </div>

</body>
</html>
<?php
include("connection.php");
if(isset($_POST['add']))
{
$pno=$_POST['passno'];
$ftname= $_POST['ftname'];
$mdname=$_POST['mdname'];
$ltname= $_POST['ltname'];
$dob=$_POST['dob'];
$nation=$_POST['nation'];
$address=$_POST['address'];
$selected_radio= $_POST['gender'];

$file = rand(1000,100000)."-".$_FILES['file']['name'];
	    $file_loc = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$folder="image/";
		
		// new file size in KB
		$new_size = $file_size/2048;  
		// new file size in KB
		
		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case
		
		$final_file=str_replace(' ','-',$new_file_name);
		
		if(move_uploaded_file($file_loc,$folder.$final_file))
		{
		
		          $sql = mysqli_query($con, "INSERT INTO `details`(`pno`, `fname`, `mname`, `lname`, `dob`, `nationality`, `address`, `gender`, `img`) VALUES ('$pno','$ftname','$mdname','$ltname','$dob',
                  '$nation','$address','$selected_radio','$final_file')") or die(mysqli_error($con));

				if($sql)
				{
					
                    echo " <h4>Saved Succesfully....</h4>";
				}
		}

    }

?>
