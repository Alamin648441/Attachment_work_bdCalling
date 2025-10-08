<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm = trim($_POST['confirm']);
    $phone = trim($_POST["phone"]);

    $errors = [];

    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors['name'] = "nly letters allowed for name";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "invalid email address";
    }

    if (strlen($password) < 6) {
        $errors['password'] = "password length must be 6 characters";
    }

    if ($confirm !== $password) {
        $errors['confirm'] = "password do not match";
    }

    if (!preg_match("/^\d{11}$/", $phone)) {
        $errors['phone'] = "phone number must be 11 digits";
    }

    if (empty($errors)) {
        echo "<h3>successfully login </h3> <br>";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;text-align:center;'>$error</p>";
        }
        echo "<p style='color:red;text-align:center;'>$error</p>";
    }
}
