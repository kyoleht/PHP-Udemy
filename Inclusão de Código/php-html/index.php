<?php 
    require_once 'backend.php';
?>

<h1>Bem-vindo(a) ao nosso site!</h1>
<p><?= $nome; ?>, veja as nossas ofertas e promoções</p>

<h2>Confira nossos principais produtos</h2>
<ul>
<?php foreach($produtos as $produto): ?>
    <li><?= $produto; ?></li>
<?php endforeach?>
</ul>