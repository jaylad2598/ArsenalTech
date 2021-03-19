<?php
require APPROOT.'/views/includes/head.php';
?>
<div class="navbar">
    <?php
    require APPROOT.'/views/includes/navigation.php';
    ?>
</div>
<div class="contact-login">
    <div class="wrapper-login">
        <h2>Register</h2>
        <form action="<?php echo URLROOT; ?>/users/register" method="POST">
            <input type="text" placeholder="Enter User Name " id="username" onblur="nameValidation(this);" name="username">
            <span class="invalidFeedback"></span>
            <?php echo $data['usernameError']; ?>

            <input type="email" placeholder="Enter Email " id="email" onblur="validateEmail(this);" name="email">
            <span class="invalidFeedback"></span>
            <?php echo $data['emailError']; ?>

            <input type="password" placeholder="Enter Password " name="password">
            <span class="invalidFeedback"></span>
            <?php echo $data['passwordError']; ?>

            <input type="text" placeholder="Enter Contact Number " name="contact">
            <span class="invalidFeedback"></span>
            <?php echo $data['contactError']; ?>

            <button id="submit" type="submit" value="submit">Submit</button>
            <p class="option">Already User.. <a href="<?php echo URLROOT; ?>/users/login">Sign In ...</a></p>

        </form>
    </div>
</div>
<script>
    function validateEmail(emailField)
    {
        var regemail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (regemail.test(emailField.value) == false)
        {
            alert('Invalid Email Address');
            document.getElementById('email').value = "";
        }
        return true;
    }


</script>