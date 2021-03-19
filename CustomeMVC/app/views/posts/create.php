<?php
require APPROOT.'/views/includes/head.php';
?>
<div class="navbar">
    <?php
    require APPROOT.'/views/includes/navigation.php';
    ?>
</div>
<div class="container-center">
    <h1>Create Post</h1>
    <form action="<?php echo URLROOT; ?>/posts/create" method="POST">
        <div class="form-item">
            <input type="text" placeholder="Enter Post Title " name="title">
            <span class="invalidFeedback"></span>
            <?php echo $data['titleError']; ?>
        </div>

        <div class="form-item">
            <textarea name="body" placeholder="Enter your Post Body"></textarea>
            <span class="invalidFeedback"></span>
            <?php echo $data['bodyError']; ?>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>