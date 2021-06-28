<?php
include("connection.php");
if(isset($_POST['edit']))
{
$pno=$_POST['passno'];

$sql = mysqli_query($con, "SELECT * FROM `details` WHERE pno = '$pno'") or die(mysqli_error($con));
$row = mysqli_fetch_array($sql);

        $pno = $row['pno'];
        $ftname = $row['ftname'];
        $ltname = $row['ltname'];
        $mdname=$row['mdname'];
        $ltname= $row['ltname'];
        $dob=$row['dob'];
        $nation=$row['nation'];
        $address=$row['address'];
        $selected_radio= $row['gender'];
        $image=$row['img'];
    }
    else
    {
        $pno=$ftname=$ltname="";
    }
                
?>
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
                            <td><input type="text" class="form-control"  name="passno" required value="<?php $row['adv_title'];?>"></td>
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
                            
                            <td colspan="2"><center><button type="submit" class="btn btn-lg btn-warning btn-block" value="add" name="add" >SAVE</button>
                            <input type="reset"></center></td>
                    </tr>
                </form>
            
                
            </div>

</body>
</html>