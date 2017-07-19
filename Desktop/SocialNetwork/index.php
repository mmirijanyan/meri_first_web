<?php
/**
 * Created by PhpStorm.
 * User: meri
 * Date: 7/19/17
 * Time: 3:08 AM
 */

require_once 'core/init.php';

if (Session::exists('home')) {
    echo '<p>' . Session::flash('home') . '</p>';

}

$user = new User();
if ($user->isLoggedIn()) {
    ?>
    <p> Hello <a
                href="profile.php?user=<?php php echo escape($user->data()->email);?>" <?php echo escape($user->data()->email); ?></a>
        !</p>
    <ul>
        <li><a href="logout.php">Log out</a></li>
        <li><a href="update.php">Update details</a></li>
        <li><a href="changepassword.php">Change password</a></li>
    </ul>


    <?php
} else {
    echo '<p> You need to <a href="login.php">log in</a> or <a href="register.php">register</a></p>';
}
