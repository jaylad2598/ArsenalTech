<?php
    require APPROOT.'/views/includes/head.php';
?>
<div class="navbar">
    <?php
        require APPROOT.'/views/includes/navigation.php';
    ?>
</div>
<div class="container-center" style="text-align: center">
    <h2 style="font-size: 40px;margin-top: 15px">View Post</h2>
        <div class="form-item">
            <p>Post Title Is : <?=$data->title;?></p>
            <p><?=$data->body;?></p>
            <span class="invalidFeedback"></span>
            <?php echo $data['titleError']; ?>
        </div>
</div>