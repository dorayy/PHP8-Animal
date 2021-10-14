<?php

// insert to the table animal
function insert(string $couleur,string $type, string $nom, int $age){
    require('Animal.php');
    require('config.php');

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
    $chien = new Animal($couleur,$type,$nom,$age,false);
try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
        $data = [
            'couleur' => $chien->getCouleur(),
            'type' => $chien->getType(),
            'nom' => $chien->getNom(),
            'age' => $chien->getAge(),
            'adopte' => "false"
        ];
        $sql = "INSERT INTO Animal (`couleur`, `type`, `nom`, `age` , `adopte`) VALUES (:couleur, :type, :nom, :age, :adopte)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
}

// get all information from the table animal and return it to an array
function getAll(){
    require('config.php');

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
        $sql = "SELECT * FROM animal WHERE adopte = false";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
}
// get the 10 last animal and return it to an array
function getLast10(){
    require('config.php');

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
        $sql = "SELECT * FROM animal WHERE adopte = false ORDER BY id DESC LIMIT 10";
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}   
}