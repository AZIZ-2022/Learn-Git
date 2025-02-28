
<?php
include '../control/customer_complaints_control.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Complaint - Broadband Service Management</title>
</head>
<body>
<form action="../control/customer_complaints_control.php" method="POST">


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
                    
                    
                    <tr><td><button>Logout</button></td></tr> <!-- Simple Logout Button -->
                </table>
            </td>

            <!-- Main Content -->
            <td valign="top">
                <h1 align="center">Add Complaint</h1>

                <!-- Customer Information (Readonly) -->
                <h3>Customer Information</h3>
                <table border="1" width="100%" cellpadding="10">
                    <tr>
                        <td>From:</strong></td>
                        <td><input type="text" value= <?php echo htmlspecialchars($email); ?> readonly></td>
                    </tr>
                    <tr>
                        <td>TO:</strong></td>
                        <td><input type="text" value="admin@gmail.com" readonly></td>
                    </tr>
                    
                    
                </table>

                <!-- Complaint Form -->
                <h3>Write Your Complaint</h3>
                <form action="" method="post">
                <textarea name="description" placeholder="Enter your complaint here..." style="width: 100%; height: 150px;"></textarea>
                <br><br>
                    <input type="submit" name="submit" value="Submit Complaints">
                </form>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
