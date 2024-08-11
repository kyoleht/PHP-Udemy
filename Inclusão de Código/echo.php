<?php 
    $nome = 'Rafael';
    $sobrenome = 'Ferreira';
    $profissao = 'Web Developer';
?>

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="text" value="<?= $sobrenome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<p>Qual a sua profissão?</p>
<form action="">
    <div>
        <input type="text" value="<?= $profissao; ?>">
    </div>
    <div>
        <input type="submit" value="OK">
    </div>
</form>