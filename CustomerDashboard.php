<?php
include '../control/customer_dashboard_control.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard - Broadband Service Management</title>
</head>
<body>
<form action="../control/customer_dashboard_control.php" method="POST">

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
              

                
               
         
                
</body>
</html>
