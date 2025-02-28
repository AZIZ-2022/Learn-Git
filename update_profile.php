<?php
include '../control/update_profile_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
</head>
<body >

      
        <form action="" method="post">
      <!-- <input type="hidden" name="subscription_id" value="<?php echo $subscription_id; ?>">
      <input type="submit" name="unsubscribe" value="Unsubscribe">
     -->
        <h1 id="edit_user_h1">Edit User</h1>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
 

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" readonly value="<?php echo $email; ?>"><br>
 

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $password; ?>"><br>


        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>"><br>


        <label for="address">Address:</label>
        <textarea id="address" name="address"><?php echo $address; ?></textarea><br>
    


        <br>
        <div class="profile-picture">
            <img src="../uploads/<?php echo htmlspecialchars($Profile_Pic); ?>" alt="Profile Pic" >
            <input type="file" name="Profile_Pic" id="profileInput"  value="<?php echo $Profile_Pic; ?>" >
            </div>


        <input type='submit' name='update' value='Update Profile'>
        <input type='reset' name='back' value='Back'>

      
    </form>
    </div>
</body>
</html>