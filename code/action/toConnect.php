<?php
//Session start import of config
include_once "config.php";

$sql =
  " SELECT * FROM users
  WHERE email = :email
";

$dataBinded = array(
  ':email' => $_POST['email'],
);

$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);


$user = current($prepareRequete->fetchAll(PDO::FETCH_ASSOC));
var_dump($user);
//echo password_verify("123", $user['password']);
if (empty($user)) {
  $_SESSION['message'] = 'Email ou mot de passe incorrect';
  header('Location:../page/connexion.php');
} else {

  if (!password_verify($_POST['password'], $user['password'])) {
    $_SESSION['message'] = 'Email ou mot de passe incorrect';
    header('Location: ../page/connexion.php');
  } else {
    $_SESSION['user'] = $user;
    $_SESSION['message'] = '';
    header('Location: ../page/index.php');
  }
}
