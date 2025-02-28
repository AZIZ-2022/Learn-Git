<?php
include '../control/CustomerProfile_control.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile - Broadband Service Management</title>
</head>
<body>
    <form action="../control/CustomerProfile_control.php" method="POST">
        <!-- Main Table for Layout -->
        <table border="1" width="100%" cellspacing="0" cellpadding="10">
            <tr>
               <!-- Sidebar -->
            <td width="20%" valign="top" bgcolor="#f2f2f2">
                <h3 align="center">Menu</h3>
                <table border="1" width="100%">
                    <tr><td><a href="CustomerDashboard.php">Dashboard</a></td></tr>
                    <tr><td><a href="subscriptions.php">Subscribed Plans</a></td></tr>
                    <tr><td><a href="Cusprofile.php">Profile</a></td></tr>
                    <tr><td><a href="CusBillHistory.php">Billing History</a></td></tr>
                    <tr><td><a href="CustomerComplaints.php">Add Complaint</a></td></tr>
                    <tr><td><a href="CustomerComplaintHistory.php">Complaints History</a></td></tr>
                    
                    
                    
                    <tr><td><button>Logout</button></td></tr> 
                </table>
            </td>

            <h1>Customer Profile</h1>


    <!-- Display Profile Picture -->
   
        <label for="profile"></label> <?php echo $profile_Pic;  ?>
   

    <!-- Display Other Information -->


    <label for="Name">Name:  </label>
    <input type="text"  name="name" value="<?php echo ($name); ?>"><br>


    <label for="Phone">Phone:  </label>
    <input type="text"  name="phone" value="<?php echo ($phone); ?>"><br>

   
    <label for="Address">Address:  </label>
    <input type="text"  name="address" value="<?php echo ($address); ?>"><br>

    <label for="Email">Email:  </label>
    <input type="text"  name="email" readonly value="<?php echo ($email); ?>"><br>


    <label for="Password">Password:  </label>
    <input type="password"  name="password" value="<?php echo ($password); ?>"><br>

    

    <input type = "submit" name='update' value ="Update Profile"> 





    </form>
</body>
</html>
