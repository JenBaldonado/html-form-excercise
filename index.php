<!DOCTYPE html>
<html lang="en">

    <?php include('Templates/header.php') ?>

    <?php 

        if(isset($_POST['submit'])){
            echo $_POST['first-name'];
            echo $_POST['last-name'];
            echo $_POST['password'];
        }
    
    
    
    ?>

    <h1>Registration Form</h1>
    <p>Please fill out this form with the required infrmation.</p>
    <form action="index.php" method="POST">
        <fieldset>
            <!-- first name, last name, email, password fields -->
            <label>Enter your first name: <input type="text" name="first-name" required /></label>
            <label>Enter your last name: <input type="text" name="last-name" required /></label>
            <label>Enter your email: <input type="email" name="email" required /></label>
            <label>Enter your password: <input type="password" name="password"  required /></label>
        </fieldset>
        <fieldset>
            <label><input class="inline" type="radio" name="account-type" /> Personal account</label>
            <label><input class="inline" type="radio" name="account-type" /> Business account</label>
            <label><input class="inline" type="checkbox" name="terms-conditions"  required /> I accept the <a href="#">terms and conditions</a> </label>
        </fieldset>
        <fieldset>
            <label>Upload profile picture: <input type="file" name="file-upload" /></label>
            <label>Input your age (years): <input type="number" name="age" min="13" max="120" /></label>
            <label>
                How did you hear from us?
                <select name="referrer"> 
                    <option value="">(select one)</option>
                    <option value="1">News</option>
                    <option value="2">Blog</option>
                    <option value="3">Forum</option>
                    <option value="4">Others</option>
                </select>
            </label>
            <label>
                Provide a bio:
                <textarea name="bio" id="" cols="30" rows="3" placeholder="I like coding on a rainy day ..."></textarea>
            </label>
        </fieldset>
        <input type="submit" name="submit" value="Submit" />
    </form> 
</body>
</html>