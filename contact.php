<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $message = $_POST['message'];
    $mailto = "";//Add the receivers address

    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        header("Location: index.html");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.html");
    }
    if (strlen($number) < 10) {
        header("Location: index.html");
    }
    if (strlen($sub) === 0) {
        header("Location: index.html");
    }

    $headers = "From: " . $email;
    $txt = "You have a mail from " . $name . ".\n\n" . $message;
    $result = mail($mailto, $sub, $txt, $headers);
    if ($result)
        echo "<script>alert('mail send successfully');</script>";
    else
        echo "<script>alert('mail could'nt be send');</script>";
}
