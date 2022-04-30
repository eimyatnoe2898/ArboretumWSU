<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $subject = $message;

        $message = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: " . $message;
        $file = fopen("emails.txt", "a");
        fwrite($file, "\n############### NEW Contact From ################\n".$message);
        fclose($file);
        echo "<script>alert('Thank you for the feeedback. We will get back to you.');</script>";
        $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
        
        if (!empty($referer)) {
            header("location:".$referer."?success");
        }
        else {
            // header("")
        }
    }

?>