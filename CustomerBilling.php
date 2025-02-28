<?php
include '../control/customer_billing_control.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Broadband Service Management</title>
</head>
<body>
<form action="../control/customer_billing_control.php" method="POST" onsubmit="return validatePayment()">

    <!-- Header -->
    <h1 align="center">Payment Page</h1>
    
    <!-- Selected Plan Details -->
    <h3>Selected Plan Details</h3>

                <label for="Speed">Speed:</label>
                <input type="text"  name="speed" id="speed" value="<?php echo $speed?>">
                
                
                <label for="Price">Price:</label>
                <input type="text"  name="price" id="price" value="<?php echo $price?>">


                <label for="Description">Description</label>
                <input type="text"  name="description" id="description" value="<?php echo $description?>"><br><br>


                


    <!-- Payment Section -->
    <h3 align="center">Select Payment Method</h3>
    <label for="payment_method">Select Payment Method:</label>
        <select name="payment_method" id="payment_method">
            <option value="bkash">Bkash</option>
            <option value="nagad">Nagad</option>
        </select>
        <p id="error_payment_method"></p>
        <br><br>

        <!-- Mobile Number -->
        <label for="account_number">Mobile Number:</label>
        <input type="text" id="ac" name="ac" placeholder="01XXXXXXXXX" >
        <p id="error_phone"></p>
        <br><br>
        <!-- Password -->
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" placeholder="01XXXXXXXXX" >
        <p id="error_password"></p>
        <br><br>

        <!-- Submit Button -->
        <input type="submit" name="pay" value="Pay Now">
        <input type="reset" name="clear" value="clear">
    </form>
    <script src="../js/myjs.js"></script>
</body>
</html>
