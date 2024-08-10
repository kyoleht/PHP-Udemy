<?php 

/*  com o include inserimos um php file, ou ate mesmo um html, em outro;
    podendo assim utilizar tudo que esta declarado no arquivo incluido;
    o include nao gera erro fatal se o file nao existir, e sim um warning;
    exemplo: include 'file.ext';
*/


include "teste.php";

?>

<p>Após o include</p>
<p>Imprindo C = <?php echo $c ?></p>