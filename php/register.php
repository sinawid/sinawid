<?php

require_once 'db.php';
session_start();

$error = false;

$firstname = '';
if (isset($_POST['firstname'])) $firstname = $test_db->real_escape_string($_POST['firstname']);

$lastname = '';
if (isset($_POST['lastname'])) $lastname = $test_db->real_escape_string($_POST['lastname']);

$username = '';
if (isset($_POST['username'])) $username = $test_db->real_escape_string($_POST['username']);

$email = '';
if (isset($_POST['email'])) $email = $test_db->real_escape_string($_POST['email']);

$password = '';
if (isset($_POST['password_1'])) $password = $_POST['password_1'];

$passwordRetype = '';
if (isset($_POST['password_2'])) $passwordRetype = $_POST['password_2'];

if ($firstname == '') { $error = true; }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $error = true; }
if (strlen($username) < 3){ $error = true; }
if (strlen($password) < 8){ $error = true; }
if ($password != $passwordRetype) { $error = true; }
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT id FROM user WHERE (username LIKE '$username') OR (email LIKE '$email')";
$result = $test_db->query($sql);
    
$_SESSION['errorMsg'] = '';
if ($result){
        while($results = $result->fetch_assoc()) {
            $error = true;
            $_SESSION['errorMsg'] = '<ul class="list"><li>Username or email already exists</li></ul>';
            break;
        }
}

if ($error == false) {
        $sql = "INSERT INTO `user` (`username`, `password`, `email`, `firstname`, `lastname`) VALUES('$username', '$hashedPassword', '$email', '$firstname', '$lastname')";
        $result = $test_db->query($sql);
        $_SESSION['username'] = $username;
        unset($_SESSION['errorMsg']);
        header('location: ../login');
} else {
        header('location: ../register');
}

?>