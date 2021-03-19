<?php
    require APPROOT.'/views/includes/head.php';
?>
<div class="navbar">
    <?php
    require APPROOT.'/views/includes/navigation.php';
    ?>
</div>
<div class="container">
    <?php if(isLoggedIn()): ?>
        <a class="btn green" href="<?php echo URLROOT; ?>/posts/create ">Create</a>
    <?php endif; ?>
    <div class="row">

    <?php foreach($data['posts'] as $post): ?>
        <div class="container-item">
            <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>

                <a class="btn orange" href="<?php echo URLROOT . "/posts/update/" . $post->id ?>">Update</a>
            <?php endif; ?>

            <form action="<?php echo URLROOT . "/posts/delete/" .$post->id ?>" method="POST">
                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
                    <input type="submit" name="delete" value="Delete" class="btn red">
                <?php endif; ?>
            </form>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../public//img/clouds.jpg" height="150px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post->title; ?></h5>
                    <h5 class="card-title"><?php echo 'Created on '.date('F j h:m:s',strtotime($post->createat)) ?></h5>

                    <a style="float: right" href="<?php echo URLROOT . "/posts/postdata/" . $post->id ?>">View Post...</a>
                </div>
            </div>
            </div>


    <?php endforeach; ?>
    </div>
</div>