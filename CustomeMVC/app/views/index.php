<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
    require APPROOT.'/views/includes/head.php';
?>
<div id="section-landing">
    <?php
    require APPROOT.'/views/includes/navigation.php';
    ?>
    <div class="wrapper-landing">
        <h1>MVC Blog System</h1>
    </div>
</div>


