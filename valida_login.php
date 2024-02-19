<?php   

//variavel que identifica se a autenticação foi feita
$usuario_autenticado=false;
$usuarios_app= array(array('email'=>'admteste@gmail.com.br','senha'=>"1234567"),
array('email'=>'admteste@gmail.com.br','senha'=>"1234567"));






foreach($usuarios_app as $user){
 if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']){
    $usuario_autenticado=true;
 }
}

if($usuario_autenticado){
    echo 'usuário autenticado';
}
else{
   header("Location: index.php?login=erro");
}

/*
echo '</pre>';
print_r($usuarios_app);
echo '</pre>';

    print_r($_POST);


    echo $_POST['email'];
    echo $_POST['senha'];

  
*/

 
?>