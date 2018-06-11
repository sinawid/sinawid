<?php

require_once 'db.php';
session_start();

$error = false;

$username = '';
if (isset($_POST['username'])) $username = $test_db->real_escape_string($_POST['username']);

$password = '';
if (isset($_POST['password'])) $password = $_POST['password'];

if (strlen($username) < 3){ $error = true; }
if (strlen($password) < 8){ $error = true; }

if ($error == false) {
    $sql = "SELECT `password` FROM user WHERE (username LIKE '$username')";
    $result = $test_db->query($sql);
    
    $_SESSION['errorMsg'] = '';
    if ($result){
            while($results = $result->fetch_assoc()) {
                $result_array[] = $results;
            }
    }
    
    if (count($result_array) == 0){
        $_SESSION['errorMsg'] = '<ul class="list"><li>Username does not exist</li></ul>';
        header('location: ../login');
    } else {

        if (password_verify($password, $result_array[0]['password'])){

            $_SESSION['username'] = $username;
            header('location: ..');

        } else {

            $_SESSION['errorMsg'] = '<ul class="list"><li>Wrong password</li></ul>';
            header('location: ../login');

        };

    }
} else {
    header('location: ../login');
}

?>
