<?php

if (isset($_POST['submit_info'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $img_name = $_FILES['upImg']['name'];
    $tmp_img_name = $_FILES['upImg']['tmp_name'];
    move_uploaded_file($tmp_img_name, 'upload/' . $img_name);
    // print_r($_FILES['upImg']);
}


?>


<h3> Username: <?php if (isset($user_name)) echo $user_name; ?></h3>
<h3> Email: <?php if (isset($email)) echo $email; ?></h3>
<h3> Password: <?php if (isset($pass)) echo $pass; ?></h3>

<img src="./upload/<?php if (isset($img_name)) echo $img_name ?>" alt="" style="width: 200px;">