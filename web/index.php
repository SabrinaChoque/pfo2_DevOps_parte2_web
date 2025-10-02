<?php
$pdo = new PDO("mysql:host=db;dbname=pfo2;charset=utf8","root","1234");
$rows = $pdo->query("SELECT id, name FROM products")->fetchAll(PDO::FETCH_ASSOC);
?><!doctype html><html><body>
<h1>Productos</h1>
<ul>
<?php foreach($rows as $r): ?>
  <li>#<?=htmlspecialchars($r['id'])?> - <?=htmlspecialchars($r['name'])?></li>
<?php endforeach; ?>
</ul>
</body></html>