<?php 

/*  Com o require inserimos um php file, ou ate mesmo um html, em outro;
    podendo assim utilizar tudo que esta declarado no file incluido;
    o require gera um erro fatal se o file não existir, parando o script;
    exemplo: require 'file.ext'
*/

require 'teste.php';

?>

<p>Arquivo do Include</p>

<?php 
    require 'arquivos/funcao.php';
?>