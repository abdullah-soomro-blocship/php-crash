<?php

if (isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
    if (!empty($_FILES['upload']['name'])) {
        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_path = $_FILES['upload']['full_path'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $file_type = $_FILES['upload']['type'];
        $target_dir = "uploads/$file_name";
        // echo $target_dir;
    
        // get uploaded file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        // echo $file_ext;

        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1000000) {

                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color: green; ">File successfully uploaded</p>';
            } else {
                $message = '<p style="color: red; ">File size is too large</p>';
            }
        } else {

            $message = '<p style="color: red; ">Invalid file type</p>';
        }
    } else {
        $message = '<p style="color: red; ">Please choose a file</p>';
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        Select Image to Upload:
        <br>
        <input type="file" name="upload">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <img src=<?php echo $target_dir ?> alt="Image">

</body>

</html>