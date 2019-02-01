<!DOCTYPE html>
<html>
    <head>
        <title>
            Get Details
        </title>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">



<div class="container invoice-form">
            <div class="invoice-image">
                <img src="" alt="LOGO"/>
            </div>
            <form method="POST" action="product.php"> 
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control col-md-4" placeholder="Enter the Name " required/>
                </div>
                <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea name="address" class="form-control" placeholder="Enter the Address" required></textarea>
                </div>

                  <div class="form-group">
                        
                        <input type="text" name="state" class="col-md-4 form-control" placeholder="Enter the State" required/>
                </div>
                <div class="form-group">
                        
                        <input type="text" name="pin" class="col-md-4 form-control" placeholder="Enter the Pincode" required/>
                </div>
                
                <div class="form-group">
                        
                        <input type="text" name="country" class="col-md-4 form-control" placeholder="Enter the Country" required />
                </div><br>
                <label for="place">Place of Supply:</label>
                <div class="form-group">
                    <input type="text" name="place" class="col-md-4 form-control" placeholder="Enter the Place of supply" required/>
                </div><br>
                   
                    Enter the Number of Products:<input type="text" class="form-control col-md-4" placeholder="Enter the Number" name="val" required/>
                   <br><br> <button type="submit" class="btn btninvoice">Enter Product Details</button>
            </form>
</div>
</body>
</html>