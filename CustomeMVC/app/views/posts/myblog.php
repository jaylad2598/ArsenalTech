<?php
require APPROOT.'/views/includes/head.php';
?>
    <div class="navbar">
        <?php
        require APPROOT.'/views/includes/navigation.php';
        ?>
    </div>

<?php foreach($data as $blog): ?>
    <div class="container-item">
        <img src="../public/img/skyline.php" height="200px" />
        <p><?php  echo $blog->title."<br>"?></p>
        <p><?php echo $blog->body."<br>"?></p>


<?php endforeach; ?>
