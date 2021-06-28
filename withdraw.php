<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:wheat;">
<center>  <h1>WITHDRAWAL</h1><br>
   <div style="width:500px;">
    <center>


    <form action="" method="POST">
        
        <input type="number" name="acno"class="form-control" placeholder="Enter Account number.."><br>

        <input type="number" name="balance" class="form-control" placeholder="Enter amount"><br>
        <input type="submit" name="withdraw" class="btn btn-primary btn-lg" value="Withdraw">
        <button class="btn btn-warning btn-lg"><a href="assignq5.php">BACK</a></button><br>
    </form>
    <?php
    if (isset($_POST['withdraw'])) {
        $ano = $_POST['acno'];
        $amount = $_POST['balance'];
        $bal = 0;
        include("db.php");
        if (!$con) die("Error");
        else {
            $sql = $con->query("select balance from accounts where accno=$ano");
            if (mysqli_num_rows($sql) == 0) {
                echo "Account does not exist!!";
            } else {
                if (mysqli_num_rows($sql) > 0) {
                    $bal = mysqli_fetch_array($sql);
                    
                }
                if ($bal['balance'] > $amount) {
                    $finalBal = $bal['balance'] - $amount;
                    if($finalBal<500)
                    {
                        echo"withdraw not possible because minimum 500 must";
                    }
                    else
                    {
                        $con->query("update accounts set balance=$finalBal where accno=$ano");
                        if ($con == TRUE)
                            echo "Withdrawn successfully..<br>withdrawal amount:".$amount."<br>Balance: ".$finalBal;
                            
                        else {
                            echo "ERROR: $con->error <br>";
                        }

                    }

                   
                }
                else
                    echo "Insufficient balance";
            }
        }
    }
    ?>
</body>

</html>