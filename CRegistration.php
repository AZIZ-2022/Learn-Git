<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
</head>
<body>
    <form action="../control/CustomerReg_control.php" method="post" onsubmit="return validateReg()"  enctype="multipart/form-data">
        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td align="center">
                    <h1>Customer Registration</h1>
                    <table width="60%" cellspacing="10" cellpadding="10" border="1">
                       
                        <tr>
                            <td colspan="2" align="center"><h3>Personal Details</h3></td>
                        </tr>
                        <tr>
                            <td><b>Full Name:</b></td>
                            <td><input type="text" name="name" name="name" placeholder="Enter your full name" ></td>
                            <p id="error_Name" class="error"></p>
                        </tr>
                        <tr>
                            <td><b>Email:</b></td>
                            <td><input type="text" name="email" id="email" placeholder="Enter your email" ></td>
                            <p id="error_email" class="error"></p>
                        </tr>
                        <tr>
                            <td><b>Password:</b></td>
                            <td><input type="password" name="password" id="password" placeholder="Create a password" ></td>
                            <p id="error_password" class="error"></p>
                        </tr>
                        <tr>
                            <td><b>Confirm Password:</b></td>
                            <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" ></td>
                            <p id="error_confirm_password" class="error"></p>
                        </tr>
                        <tr>
                            <td><b>Phone:</b></td>
                            <td><input type="text" name="phone" id="phone" placeholder="Enter your phone number" ></td>
                            <p id="error_phone" class="error"></p>
                        </tr>
                        <tr>
                            <td><b>Address:</b></td>
                            <td><textarea name="address" id="address" placeholder="Enter your address" rows="4" ></textarea></td>
                            <p id="error_Name" class="error"></p>
                        </tr>
                        <tr>
                            <td><b>Profile Picture:</b></td>
                            <td><input type="file" name="Profile_Pic" id="file" accept="image/*" ></td>
                            <p id="error_Name" class="error"></p>
                        </tr>

                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="register" value="Register">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
    <script src="../js/myjs.js"></script>
</body>
</html>
