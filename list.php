<?php
$dbname = 'ci54242_dber';
$dbuser = 'ci54242_dber';
$dbpass = 'resedent1A';

$pdo = new PDO("mySQL:host=localhost; dbname=world", 'ci54242_dber', 'resedent1A');
$stm = pdo->query('SELECT * FROM orders ORDEER BY id DESC');
foreach ($stm as $row){
?>
<table>
<?      
 foreach ($stm as $row){
</table>

}
