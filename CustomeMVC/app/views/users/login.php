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
        <h2>Sign In</h2>
        <form action="<?php echo URLROOT; ?>/users/login" method="POST">
            <input type="text" placeholder="Enter User Name " name="username">
            <span class="invalidFeedback"></span>
                <?php echo $data['usernameError']; ?>

            <input type="password" placeholder="Enter Password " name="password">
            <span class="invalidFeedback"></span>
                <?php echo $data['passwordError']; ?>

            <button id="submit" type="submit" value="submit">Submit</button>
            <p class="option">Not Register Yet? <a href="<?php echo URLROOT; ?>/users/register">Create Account..</a></p>
        </form>
    </div>
</div>


