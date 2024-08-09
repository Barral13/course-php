<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_users");
// echo json_encode($usuarios);

// One user for id;
// $test = new User();
// $test->loadById(1);
// echo $test;

// // List Users
// $list = User::getList();
// echo json_encode($list);

// Load list user for deslogin
// $search = User::search("2");
// echo json_encode($search);

// Load user whith login and password
// $user = new User();
// $user->login("test", "test01");

// // Create new User
// $pupil = new User("pupil_2", "test_04");
// $pupil->insert();
// echo $pupil;

// Update User
// $user = new User();
// $user->loadById(4);
// $user->update("Test_update", "update_04");
// echo $user;

// Delete User
$user = new User();

$user->loadById(2);

$user->delete();
echo $user;

?>