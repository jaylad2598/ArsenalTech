<?php
require APPROOT.'/views/includes/head.php';
?>
<div class="navbar">
    <?php
    require APPROOT.'/views/includes/navigation.php';
    ?>
</div>
<div class="container-center">
    <h1>Update Post</h1>
    <form action="<?php echo URLROOT; ?>/posts/update/<?php echo $data['post']->id ?>" method="POST">
        <div class="form-item">
            <input type="text" name="title" value="<?php echo $data['post']->title ?> ">
            <span class="invalidFeedback"></span>
            <?php echo $data['titleError']; ?>
        </div>

        <div class="form-item">
            <textarea name="body"><?php echo $data['post']->body ?></textarea>
            <span class="invalidFeedback"></span>
            <?php echo $data['bodyError']; ?>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>