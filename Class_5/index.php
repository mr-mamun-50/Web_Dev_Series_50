<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>

</head>

<body>


    <form action="./info_display.php" method="POST" enctype="multipart/form-data">

        <label for="name"> Name</label><br>
        <input type="text" name="user_name"><br>

        <label for="email"> Email</label><br>
        <input type="email" name="email"><br>

        <label for="name"> Password</label><br>
        <input type="password" name="pass"><br>

        <label for="name"> Upload photo</label><br>
        <input type="file" name="upImg"><br><br>

        <button type="submit" name="submit_info">Login</button>

    </form>




</body>

</html>