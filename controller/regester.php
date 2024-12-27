<?php 
require_once '../model/user.php';
require_once '../model/connect_db.php';

if (isset($_POST['submit'])) {

    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bday = $_POST['bday'];

    $db = new Connect_db();
    $conn = $db->getConnection();

    $user = new USER($conn);

    $user->name = $name;
    $user->lastname = $lastname;
    $user->email = $email;
    $user->password = $password;
    $user->bday = $bday;

    $user->create();
}
?>