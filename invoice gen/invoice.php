<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

<script>
function genpdf() {
		
		html2canvas(document.body,{
      onrendered:function(canvas){
        var img=canvas.toDataURL("image/png");
        var doc=new jsPDF("p", "mm", "a4");
        

        doc.addImage(img,'JPEG',0,0,212,210);
        doc.save('invoice.pdf');
      }
      
		});

  
	}


</script>











  </head>
  <style>

@font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}



a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 35.5cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  
  padding: 10px 0px;
  margin-bottom: 0px;
  border-bottom: 1px solid #AAAAAA;
  background-color: rgb(65, 63, 63);
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 2em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 15px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #57B223;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #57B223;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}


table .total {
  background: #57B223;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.5em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}
.a{
  color:black;
}



</style>

  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="" alt="LOGO">
      </div>
      
      <div id="company">
        <h2 class="name" style="color: white">Company Name</h2>
        <div style="color: white">
          adddress
          </div><div style="color: white">
       
         </div><div style="color: white"></div>
      </div>
      </div>
      
    

    </header>
    <?php $pay=$_POST['pay']; ?>
    <div class="row"><div class="col-lg-12" style="background-color: lavender;font-size: 20px;"><span class="pull-right">Balance Due:  <?php echo $_SESSION['gd']-$pay;?></span></div></div>
   <br><br> <main>
      <div id="details" class="clearfix">
        <div id="client">
          <h2 class="name"><?php echo $_SESSION['name']; ?></h2>
          <div class="address"><?php echo $_SESSION['address'];?></div>
          <div class="address"><?php echo $_SESSION['state'];?></div>
          <div class="address"><?php echo $_SESSION['pin'];?></div>
          <div class="address"><?php echo $_SESSION['country'];?></div>
        </div>
        <div id="invoice">
<pre>
<div class="date">Invoice#:   INV/GUVI/2017/24</div><div class="date">Invoice Date:         <?php echo date("d/m/Y"); ?></div><div class="date">Terms:              Net 0</div><div class="date">Due Date:         <?php echo date("d/m/Y"); ?></div>
</pre>
        </div>
      </div>
      <div style="font-size:22px;">
      Place of Supply: <?php echo $_SESSION['place'];?>
      </div><br>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">ITEM & DESCRIPTION</th>
            <th class="unit">CGST</th>
            <th class="qty">SGST</th>
            <th class="total">AMOUNT<br><div style="font-size:13px;">(Quantity x Amount)</div></th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i=0;
        $tot=0;
        $tax=0;
        
        for($i=1;$i<=$_SESSION['val'];$i++)
        {
        ?>
        
          <tr>
              
            <td class="no"><?php echo $i;?></td>
            <td class="desc"><h3><?php
            $qty=$_SESSION['qty'.$i.''];
            $item=$_SESSION['pname'.$i.''];echo $item;
            
            ?></h3></td>
            <td class="unit"><?php $amt=$_SESSION['amt'.$i.''];echo $amt*0.09*$qty;?></td>
            <td class="qty"><?php echo $amt*0.09*$qty;?></td>
            <td class="total"><?php echo $amt*$qty;?><br><div style="font-size:13px;">(<?php echo $qty;echo "x";echo $amt;?>)</div></td>
          </tr>
        <?php
        
       $tot=$tot+$amt*$qty;
       $tax=($tax+$amt*0.09*$qty*2);
      } ?>
          
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2" style="color:gray;font-size:14px;"><p align="left">Thanks For showing Interest towards GUVI<br>Payment may please be released in favour of "guvi geek pvt ltd"</p></td>
            <td colspan="2">SUBTOTAL</td>
            <td><?php echo $tot;?></td>
          </tr>
          <tr>
            <td colspan="2" style="color:gray;font-size:14px;"><p align="left">Payable at chennai<br>Please make payment to:</p></td>
            <td colspan="2">TAX (CGST+SGST)</td>
            <td><?php echo $tax;?> </td>
          </tr>
          <tr>
          <td colspan="2"></td>
          <td colspan="2">Grand Total:</td>
          <td><?php echo $tot+$tax;?></td>
          </tr>
          <tr>
          <td colspan="2"></td>
          <td colspan="2">Payment Made:</td>
          <td>(-)  <?php echo $pay;?></td>
          </tr>
          <tr>
            <td colspan="2" style="color:gray;font-size:14px;"><p align="left">Beneficiary Name: xxxx<br>Beneficiary Acc No.: xxxxxx <br>Bank: xxx<br>IFSC code: xxxxx</p><br></td>
            <td colspan="2">Balance Due:</td>
            <td><?php echo $tot+$tax-$pay;?></td>
          </tr>
        </tfoot>
      </table>

    <center><a href="javascript:genpdf();"><button type="button" class="btn btn-warning">Download Invoice</button></a>
      
</center>
    </main>
    </div>
    
  </body>
</html>