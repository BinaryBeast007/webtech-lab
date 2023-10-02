<!DOCTYPE html> 
<html> 
<head> 
    <title>Problem Setter Registration</title>  
</head> 
<body> 
    <h1>Problemsetter Registration</h1>
    <table> 
        <form action="..\controls\process_registration.php" method="POST" enctype="multipart/form-data"> 
            <tr> 
                <th><label for="first_name">First Name:</label></th> 
                <td><input type="text" id="first_name" name="first_name"></td> 
            </tr> 
            <tr> 
                <th><label for="last_name">Last Name:</label></th> 
                <td><input type="text" id="last_name" name="last_name"></td> 
            </tr> 
            <tr> 
                <th><label for="username">Username:</label></th> 
                <td><input type="text" id="username" name="username" ></td> 
            </tr> 
            <tr> 
                <th><label for="email">Email:</label></th> 
                <td><input type="email" id="email" name="email"></td> 
            </tr> 
            <tr> 
                <th><label for="dob">Date of Birth</label></th> 
                <td><input type="date" id="dob" name="dob"></td> 
            </tr>
            <tr> 
                <th><label for="gender">Gender:</label></th> 
                <td>
                   <input type="radio" name="gender" value="male"> Male
                   <input type="radio" name="gender" value="female"> Female
                   <input type="radio" name="gender" value="other"> Other
                </td>
            </tr>
            <tr> 
                <th><label for="organization">Organization:</label></th> 
                <td><input type="text" id="organization" name="organization"></td> 
            </tr> 
            <tr>
               <th><label for="organization">Country:</label></th>
               <td>
                   <select class="form-select" id="country" name="country">
                       <option>select country</option>
                       <option value="AF">Afghanistan</option>
                       <option value="AU">Australia</option>   
                       <option value="BD">Bangladesh</option>
                   </select>
               </td>
            </tr>
            <tr> 
                <th><label for="phone">Phone Number</label></th> 
                <td><input type="number" id="phone" name="phone"></td> 
            </tr>
            <tr> 
                <th><label for="bio">Bio:</label></th> 
                <td><textarea id="bio" name="bio" rows="4" cols="21"></textarea></td> 
            </tr> 
            <tr> 
                <th><label for="password">Password:</label></th> 
                <td><input type="password" id="password" name="password"></td> 
            </tr> 
            <tr> 
                <th><label for="confirm_password">Confirm Password:</label></th> 
                <td><input type="password" id="confirm_password" name="confirm_password"></td> 
            </tr> 
            <tr> 
                <th><label for="profile_picture">Profile Picture:</label></th> 
                <td><input type="file" id="profile_picture" name="profile_picture" accept="image/*"></td> 
            </tr> 
            <tr> 
                <th><label for="terms">Terms & Condition</label></th> 
                <td><input type="checkbox" id="terms" name="terms">Agree</td> 
            </tr>
            <tr> 
                <td style="align: center;"><input type="submit" value="Register"></td> 
                <td><input type="reset" value="Reset"></td>
            </tr> 
        </form> 
    </table> 
</body> 
</html>