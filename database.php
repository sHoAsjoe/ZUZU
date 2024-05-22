<?php
try {
    $db= new PDO('mysql:host=localhost;dbname=zuzu', 'root', '');
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}

?>