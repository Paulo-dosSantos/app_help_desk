<?php  

session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//remover índices do array da sessão
//unset


//destruir a variável da sessão
//session_destroy
session_destroy();
header("Location: index.php");

?>