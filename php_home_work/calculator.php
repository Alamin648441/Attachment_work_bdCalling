<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>calculator </h3>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="operation">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="multi">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <button type="submit" name="submit">Calculate</button>

    </form>


 <?php

    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        $result  = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "sub":
                $result = $num1 - $num2;
                break;
            case "multi":
                $result = $num1 * $num2;
                break;
            case "div":
                if ($num2 == 0) {
                    echo "Division by zero is not allowed";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "Invalid operation";
        }
        echo "Your Result is : " . $result;
    }
  


    // <!-- if you will try it using function  -->

 
    // function calculate($a, $b, $operation)
    // {
    //     $result = 0;
    //     switch ($operation) {
    //         case "add":
    //             $result = $a + $b;
    //             return $result;
    //         case "sub":
    //             $result = $a - $b;
    //             return $result;
    //         case "multi":
    //             $result = $a * $b;
    //             return $result;
    //         case "div":
    //             if ($b == 0) {
    //                 return "Division by zero is not allowed";
    //             } else {
    //                 $result = $a / $b;
    //                 return $result;
    //             }
    //         default:
    //             return "Invalid operation";
    //     }
    // }

    // if(isset($_POST['submit'])){
    //     $num1 = $_POST['num1'];
    //     $num2 = $_POST['num2'];
    //     $operation = $_POST['operation'];
    //     $result = calculate($num1, $num2, $operation);
    //     echo "<br> Using function Your Result is : " . $result;
    // }


    ?>



</body>

</html>