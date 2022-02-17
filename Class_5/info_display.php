<?php

if (isset($_POST['submit_info'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
}


?>


<h3> Username: <?php if (isset($user_name)) echo $user_name; ?></h3>
<h3> Email: <?php if (isset($email)) echo $email; ?></h3>
<h3> Password: <?php if (isset($pass)) echo $pass; ?></h3>