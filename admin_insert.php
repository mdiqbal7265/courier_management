<?php 

require_once 'lib/classes/MysqliDb.php';

$db = new MysqliDb('localhost', 'root', '', 'cms_db');

$email = "admin@gmail.com";
$password = password_hash(12345, PASSWORD_BCRYPT);

$data =  [
    'firstname' => 'Iqbal',
    'lastname' => 'Hossen',
    'email' => $email,
    'password' => $password,
    'type' => 1
];
if($db->insert('users',$data)){
    echo 'Admin Inserted Succesfully';
}



?>