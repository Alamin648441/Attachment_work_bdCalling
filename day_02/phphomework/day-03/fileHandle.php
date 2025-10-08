<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>

<body>


    <!--file input form -->
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="upload">
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $file_name = $_FILES['file']['name'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];

        #image move local file
        $path = "image/" . $file_name;
        $file_extension = strtoupper(pathinfo($file_name, PATHINFO_EXTENSION));

        $accept_ext = ['JPG', 'PNG', 'JPEG'];

        #image validation check after store file 
        $accept_f_size = 5 * 1024 * 1024;

        if (!in_array($file_extension, $accept_ext)) {
            echo "only accept Jpg ,png and jpeg images";
        } elseif ($file_size > $accept_f_size) {
            echo "maximum file size is 5MB";
        } else {
            if (move_uploaded_file($temp_name, $path)) {
                echo "file upload successfully !";
            } else {
                echo "error ";
            }
        }
    }

    ?>



</body>

</html>