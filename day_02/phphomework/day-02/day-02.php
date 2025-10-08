<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <input type="text" name="mark" placeholder="Enter your mark">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    $today = date("l M-d-Y");
    echo " <br> Today is : " . $today . "<br>";

    $array = ['apple', 'banana', 'cherry', 'date', 'elderberry'];
    foreach ($array as $item) {
        echo  $item ."<br>" ;
    }

    $nameArray = ['Name' => 'Alamin', 'age' => 22, 'city' => 'Dhaka'];
    foreach ($nameArray as $key => $value) {
        echo  $key . " : " . $value . "<br>";
    }

    if (isset($_POST['submit'])) {
        $marks = $_POST['mark'];
        if ($marks >= 40) {
            echo "  You have passed the exam. <br>";
        } else {
            echo "You have failed the exam. <br>";
        }
    }


    $userArray = [
        ['name' => 'Alamin', 'age' => 22, 'city' => 'Dhaka','email' => 'abc@gmail.com'],
        ['name' => 'Karim', 'age' => 18, 'city' => 'Chittagong','email' => 'abc@gmail.com'],
        ['name' => 'Rahim', 'age' =>19, 'city' => 'Khulna','email' => 'abc@gmail.com'],
    ];

    foreach ($userArray as $user){
        if($user['age']>20){
            echo "<br>" . $user['name'] . " : " . $user['age'] . " : " . $user['city'] . " : " . $user['email']. "<br>";
        }
    }

    ?>



</body>

</html>