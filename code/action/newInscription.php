<?php
require_once "config.php";

$sql = "SELECT * FROM inscription WHERE email = :email";

$dataBinded = array(
    ':email' => $_POST['email']
);

$preSql = $pdo -> prepare($sql);
$preSql->execute($dataBinded);

$user = current($preSql->fetchAll(PDO::FETCH_ASSOC));
if(!empty($user)){
    header('Location: beug');
}
else{
    $sql = "INSERT INTO inscription(
                                nom, 
                                prenom, 
                                email, 
                                intext, 
                                age
                                ) 
             VALUES(
                 :nom, 
                 :prenom, 
                 :email, 
                 :intext, 
                 :age
                 )";

    $dataBinded = array(
        ':nom'   => $_POST['nom'],
        ':prenom'    => $_POST['prenom'],
        ':email'      => $_POST['email'],
        ':intext'   => $_POST['type'],
        ':age'    => $_POST['age']
    );
    var_dump($dataBinded);
    $preSql = $pdo->prepare($sql);
    $preSql->execute($dataBinded);
    //header('Location: ../page/index.php');
    
}
?>