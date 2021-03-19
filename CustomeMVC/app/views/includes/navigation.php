<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/index">Home</a>
        </li>

        <li>
            <a href="<?php echo URLROOT; ?>/pages/about">About</a>
        </li>

        <li>
            <a href="<?php echo URLROOT; ?>/posts/myblog">MyBlog</a>
        </li>

        <li>
            <a href="<?php echo URLROOT; ?>/posts/index">Post</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/contact">contact</a>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>