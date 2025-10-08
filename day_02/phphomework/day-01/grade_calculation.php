<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade calculator</title>
</head>
<body>
    <h1>Gpa calculator</h1>
    <form method="post">
        <input type="number" name="marks" placeholder="Enter your marks" required>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $marks = $_POST['marks'];
        $grade = "";
        $message = "";

        if($marks >= 80 && $marks <= 100){
            $grade = "A+";
            $message = "Congratulations! You have passed the exam. kal misty niya asio ";
        }else if($marks >= 70 && $marks < 80){
            $grade = "A";
            
        }else if($marks >= 60 && $marks < 70){
            $grade = "A-";
        }else if($marks >= 50 && $marks < 60){
            $grade = "B";
        }else if($marks >= 40 && $marks < 50){
            $grade = "C";
        }else if($marks >= 33 && $marks < 40){
            $grade = "D";
        }else if($marks >= 0 && $marks < 33){
            $grade = "F";
            $message = "Congratulations, you have become a engineer ! bap re bolo rickshaw kina dite "; ;
        }else{
            $grade = "Invalid marks";
        }

        echo "Your grade is : " . $grade;
        echo "<br>";
        echo $message . "<br> <br>"; 
        echo "Ignore Message only for fun ";
    }
    ?>
</body>
</html>