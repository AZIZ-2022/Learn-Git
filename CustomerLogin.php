<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
<form action="../control/CustomerLogin_control.php" method="post">
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center" valign="middle">
                <h1>Customer Login</h1>
                <form action="/login" method="post">
                    <table cellspacing="10" cellpadding="5" border="0">
                        <tr>
                            <td><b>Email:</b></td>
                            <td><input type="email" name="email" placeholder="Enter your email" required></td>
                        </tr>
                        <tr>
                            <td><b>Password:</b></td>
                            <td><input type="password" name="password" placeholder="Enter your password" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Login">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
