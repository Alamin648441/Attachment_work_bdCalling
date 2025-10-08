<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Day find using Number </h3>
    <form method="post">
        <input type="number" name="day" placeholder="Enter day number" required>
        <button type="submit" name="submit">Find Day</button>
       
    </form>
    <br>
    <form method="post">
     <button type="submit" name="today">today name </button>
     </form>
    <?php

    function findDay ($dayName){
        $day = [
            1 => "Saturday",
            2 => "Sunday",
            3 => "Monday",
            4 => "Tuesday",
            5 => "Wednesday",
            6 => "Thursday",
            7 => "Friday"
        ];
        return $day[$dayName] ?? "Invalid day number";
    }

    if(isset($_POST['submit'])){
        $dayNumber = $_POST['day'];
        $result = findDay($dayNumber);
        echo "The day is : " . $result;
    }
    if(isset($_POST['today'])){
        $today = date("l M-d-Y");
        echo "Today is : " . $today;
    }


    ?>
</body>

</html>