<html>
<head>
<title>Bank </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>

<body style="background-color:wheat;">
<center>  <h1>Create Account</h1><br>
   <div style="width:500px;">
    <center><form action="" method="POST">
        <input type="number" name="acno" class="form-control" id="" placeholder="Enter Account Number"><br>
        <input type="text" name="name" class="form-control" id="" placeholder="name"><br>
        <select name="type" id="" class="form-control">
            <option value="SB">Savings account</option>
            <option value="FD">FD account</option>
        </select><br>
        <textarea name="address" class="form-control" cols="30" rows="5" placeholder="Address"></textarea><br>
        <input type="text" name="balance" class="form-control" placeholder="initial balance"><br>
        &nbsp; &nbsp;<input type="submit" name="save" class="btn btn-primary btn-lg" value="CREATE">&nbsp; &nbsp;
        <button class="btn btn-warning btn-lg"><a href="assignq5.php">BACK</a></button><br>

    </form>
    </div>
    <?php
    if(isset($_POST['save'])){
        $ano=$_POST['acno'];
        $name=$_POST['name'];
        $type=$_POST['type'];
        $address=$_POST['address'];
        $bal=$_POST['balance'];
        if($bal<500)
            echo"Balance must be greater than 500";
        else
        {

            include("db.php");
            if(!$con) die("Error");
            else
            {
                $sql="insert into accounts (accno,name,address,account_type,balance) values ($ano,'$name','$address','$type',$bal)";
                if(mysqli_query($con,$sql))
                    echo "Record inserted successfully";
                else
                {
                    echo "ERROR: $con->error <br>";
                    
                }
            }
        }
    }
    ?>
</body>

</html>