<?php
echo "test1";

// define variables and set to empty values
$fname = $lname = $email = $message = "";
$fnameErr = $lnameErr = $emailErr = "";

echo "test2";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "test2.1";

    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
    } else {
        $fname = test_input($_POST["fname"]);
    }

    echo "test3";

    
    if (!empty($_POST["lname"])) {
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            $lnameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    echo "test4";


    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
echo "test5";
?>