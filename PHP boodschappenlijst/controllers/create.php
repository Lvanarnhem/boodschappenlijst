<?php 
require "./validator.php";
require "./Database.php";

$db = new Database($config);
$val = new Validator();

$query = 'INSERT INTO groceries (name, number, price) VALUES (?,?,?)';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $naam = $_POST['name'];
    $aantal = $_POST['aantal'];
    $stukprijs = $_POST['stukprijs'];
    $newItem = array($naam, $aantal, $stukprijs);

    if (!Validator::string($naam, 3, 50)) {
        $errors['string'] = 'Product must be between 3 and 50 characters';
    }

    if (!Validator::integer($aantal, 1, 50)) {
        $errors['integer'] = 'Aantal must be a number between 1 and 50';
    }

    if (!Validator::decimal($stukprijs, 0.01, 500.00)) {
        $errors['decimal'] = 'Prijs per stuk must be a number between 0.01 and 500.00';
    }
    
    if (empty($errors)) {
        $db->query($query, $newItem);
        header("Location: /");
        exit();
    }
    
};


require "./views/create.view.php";