<!DOCTYPE html>
<html>
<head>
	<title>Velocity | Payment</title>
     <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
     <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="fav.png" type="image/x-icon">
</head>
<body>

	
	   <?php
            if(isset($_GET['total']))
            {
                $price = $_GET['total'];
            }
        ?>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="ms.krys28@gmail.com">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="test">
    <input type="hidden" name="amount" value="100">
    <input type="hidden" name="currency_code" value="USD">
   





    <input type="hidden" name="return" value="http://localhost:8080/velocity/payment_success.php">


      <input type="hidden" name="cancel_return" value="http://localhost:8080/velocity/payment_cancel.php/">
    <!-- Display the payment button. -->
   
    <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online" width="200" height="50" style="margin-left: 40%;">



    <img alt="" border="0" width="2" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>


</body>
</html>

