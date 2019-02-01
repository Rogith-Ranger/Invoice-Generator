<?php
session_start();
$i=0;
$tax=0;
$tot=0;
$gd=0;
for($i=1;$i<=$_SESSION['val'];$i++)
{
    $qty=$_POST['qty'.$i.''];
    $_SESSION['qty'.$i.'']=$qty;
    $amt=$_POST['amt'.$i.''];
    $_SESSION['amt'.$i.'']=$amt;
    $tax=($tax+$amt*0.09*$qty*2);
    $tot=$tot+$amt*$qty;
    $item=$_POST['pname'.$i.''];
    $_SESSION['pname'.$i.'']=$item;
}
$gd=$tot+$tax;
$_SESSION['gd']=$gd;
?>
<html>
<head>
<title>Payment</title>
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
<form action="invoice.php" method="POST">
<div clas="form-group">
<span style="font-size:2em;">Total Amount: <?php echo $gd; ?></span>
<br><br><span style="font-size:2em;">
Enter the amount you want to pay:<br> <br><center><input type="text" name="pay"  style="border-color:black;"class="form-control col-md-4" required/></span><br>
<input type="submit" class="btninvoiceSubmit" value="Get Invoice"/>
</div>

</form>
</div>
</body>
</html>


