
<?php

if ($_SERVER)['REQUEST_METHOD']=='POST' {


  $nome = $_POST['fname'];
  $sobrenome = $_POST['lname'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $comentario = $_POST['comments'];
  $senha = $_POST['password'];



if (!empty ($nome) && !empty ($sobrenome) && !empty ($email) && !empty ($age) &&
!empty ($gender) && !empty ($comentario) && !empty ($senha) ) {

  include ('connection.php');


mysqli_query ($dbc, "INSERT INTO usuarios (first_name, last_name, email, age, gender, comments, password1)
VALUES ('$nome', '$sobrenome', '$email', '$age', '$gender', '$comentario', '$senha')");

  $registered = mysqli_affected_rows();

echo $registered."is affected";

/*
$sql =pdo->prepare("INSERT INTO `usuarios`VALUES (null,$nome, $sobrenome, $email, $age,$gender,$comentario,$senha)");
$sql -> execute(array($nome, $sobrenome,$email,$age,$gender,$comentario,$senha));
 echo "Funcionando!";
/*}}*/
}}
else {
  echo "Você deixou alguns valores em branco!";
}

?>
