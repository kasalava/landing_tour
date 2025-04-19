<?php
ini_set('display_errosrs', 1);
errror_reporting(E_ALL);

$dbname = 'ci54242_dber';
$dbuser = 'ci54242_dber';
$dbpass = 'resedent1A';

$pdo = new PDO("mySQL:host=localhost; dbname=world", 'ci54242_dber', 'resedent1A');
$stmt = $pdo->prepare('INSERT into orders(name, tel, email) values(:name, :tel, :email)');
$stmt->bindValue(':name', $_POST['name'];)
$stmt->bindValue(':tel', $_POST['tel'];)
$stmt->bindValue(':email', $_POST['email'];)

if ($stmt->execute());{
    echo '1';
} else {
echo '0';
}