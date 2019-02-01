<?php
session_start();
?>

<html>
<head><title>Product Information</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container invoice-form">
<div class="invoice-image">
                <img src="logo.png"/>
            </div>
<form method="POST" action="payment.php">
<?php 
$val=$_POST['val'];
$_SESSION['name']=$_POST['name'];
$_SESSION['address']=$_POST['address'];
$_SESSION['state']=$_POST['state'];
$_SESSION['pin']=$_POST['pin'];
$_SESSION['country']=$_POST['country'];
$_SESSION['place']=$_POST['place'];
$_SESSION['val']=$val;
$i=0;

for($i=1;$i<=$val;$i++)
{
    ?>
    <div class="form-group">
    Enter the Name, Amount & Quantity of the product <?php echo $i;?>:
    <input type="text" placeholder="Enter the Name" class="form-control col-md-4" name="pname<?php echo $i;?>"/>
    <input type="text" placeholder="Enter the Quantity" class="form-control col-md-4" name="qty<?php echo $i;?>"/>
    <input type="text" placeholder="Enter the Amount" class="form-control col-md-4" name="amt<?php echo $i;?>"/>
    </div>
    <br>
    <?php
    
}
?>
<input type="submit" value="Payment" class="btninvoice"/>
</form>
</div>
</body>
</html>